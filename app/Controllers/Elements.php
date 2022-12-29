<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Elements extends BaseController
{
    public function index()
    {
        $data =  [
            'title' => 'Ajout de catégorie | E-Tech',
            'elements'=>$this->elmtModel->join('categories','categories.cat_id=elements.cat_id')
                                        ->join('services','services.srv_id=categories.srv_id')
                                        ->findAll(),
        ];
        return view ('elements/admin/list', $data);
    }
    
    public function add(){
        $data =  [
            'title'=>'Ajout Produit | E-Tech',
            'services'=>$this->servModel->asObject()->findAll(),
        ];

        $rules = $this->elmtModel->getValidationRules();
        
        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {

            $file = $this->request->getFile('picture');        
                
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $data = [
                    'srv_id' => $this->request->getVar('srv_id'),
                    'cat_id' => $this->request->getVar('cat_id'),
                    'el_title' => $this->request->getVar('el_title'),
                    'price_inf' => $this->request->getVar('price_inf'),
                    'price_max' => $this->request->getVar('price_inf'),
                    'units' => $this->request->getVar('units'),
                    'picture' => $imageName,
                    'created_at' => date('Y-m-d H:s:i'),
                ];
                if($this->elmtModel->save($data)) {
                    $file->move('./resources/images/elements', $imageName);
                    return redirect()->back()->with('success','Produit ajouté avec succès');
                }else {
                    return redirect()->back()->with('error','Impossible d\'enregister');
                }
            }
              
        } else {
            $data['validation'] = $this->validation->getErrors();
        }

        return view ('elements/admin/add',$data);
    }

    public function edit($id){
        $data = [
            'title' => 'Editer Produit | E-Tech',
            'element' => $this->elmtModel->getElement($id),
        ];
        session()->set('element', $data['element']);
        return view('elements/admin/edit',$data);
    }
    public function update(){
        $element = session()->get('element');   
        $id = $element['el_id'];   
        $data = array(
            'el_title' => $this->request->getVar('el_title'),
            'price_inf' => $this->request->getVar('price_inf'),
            'price_max' => $this->request->getVar('price_max'),
            'units' => $this->request->getVar('units'),
            'updated_at'=>date('Y-m-d H:s:i'),
        );
        if(!empty($data)){
            $this->elmtModel->update($id,$data);
            session()->remove('element');
            $session = session();
            $session->setFlashData("success", "Modifié avec succès !");
            return redirect()->to('/elements');
        }else{
            echo view('elements/admin/edit/'.$id);
        }
        
    }


    function addImage($key)
    {
        $data[] = null;
        $data = [
            'element' => $this->elmtModel->getElement($key)
        ];
        if (!empty($data['element'])) {
            session()->set('element', $data['element']);
            echo view('elements/admin/image', $data);
        } else {
            return redirect()->back();
        }
    }

    function saveImage()
    {
        
        // $id = $this->request->getVar('element');
        // $element = $this->elmtModel->getElement($id);        
        $element = session()->get('element');    
        $oldfile = $element['picture'];
        $path = './resources/images/elements'; 
        $id = $element['el_id'];
        $data['element'] = $element;

        if ($this->request->getMethod() == 'post') {
            $rules = $this->elmtModel->getValidationRules(['only' => ['picture']]);
            if ($this->validate($rules)) {

                $file = $this->request->getFile('picture');

                if ($file->isValid() && !$file->hasMoved()) {
                    $imageName = $file->getRandomName();
                    $data = ['picture' => $imageName];
                    
                    $this->elmtModel->update($id,$data);
                    if(file_exists($path .'/'. $oldfile) && $oldfile !== null){
                        unlink($path .'/'. $oldfile);
                    }
                    $file->move('./resources/images/elements', $imageName);
                    session()->remove('element');
                    return redirect()->to('/elements');
                }
            } else {
                $data['validation'] = $this->validation->getErrors();                
            }
        }
        echo view('elements/admin/image', $data);

    }
  
    function delete($id){
        $element = $this->elmtModel->getElement($id);        
        $oldfile = $element['picture'];
        $path = './resources/images/elements'; 

        if(!empty($element)){
            $this->elmtModel->where('el_id',$id)->delete();

            if(file_exists($path .'/'. $oldfile)){
                unlink($path .'/'. $oldfile);
            }
            session()->setFlashData("success", "Produit supprimé avec succès");
            return redirect()->to('/elements');
        }
        else {
            return redirect()->back()->with("error", "Une erreur s'est produite lors de la suppression");
        }
    }
    
}
