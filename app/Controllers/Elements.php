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
            'title'=>'Ajout élément | E-Tech',
            'services'=>$this->servModel->asObject()->findAll(),
        ];

        $rules = $this->elmtModel->getValidationRules();
        
        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {

            $file = $this->request->getFile('picture');        
                
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $data = [
                    'cat_id' => $this->request->getVar('cat_id'),
                    'el_title' => $this->request->getVar('el_title'),
                    'price_inf' => $this->request->getVar('price_inf'),
                    'units' => $this->request->getVar('units'),
                    'picture' => $imageName,
                    'created_at' => date('Y-m-d H:s:i'),
                ];
                $this->elmtModel->save($data);
                $file->move('./resources/images/elements', $imageName);
                return redirect()->back()->with('success','Elément ajouté avec succès');
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
        return view('elements/admin/edit',$data);
    }
    public function update(){
        $id = $this->request->getVar('el_id');   
        $data = array(
            'cat_id' => $this->request->getVar('cat_id'),
            'el_title' => $this->request->getVar('el_title'),
            'price_inf' => $this->request->getVar('price_inf'),
            'units' => $this->request->getVar('units'),
            'updated_at'=>date('Y-m-d H:s:i'),
        );
        if(!empty($data)){
            $this->elmtModel->update($id,$data);
            $session = session();
            $session->setFlashData("success", "Modifié avec succès !");
            return redirect()->to('/services-list');
        }else{
            echo view('elements/admin/edit/'.$id);
        }
        
    }


    function addImage($key)
    {
        $data[] = null;
        $data = [
            'element' => $this->servModel->getElement($key)
        ];
        if (!empty($data['element'])) {
            echo view('elements/admin/image', $data);
        } else {
            return redirect()->back();
        }
    }

    function saveImage()
    {
        $data[] = null;
        $id = $this->request->getVar('element');
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'element' => [
                    'label' => 'Product ID',
                    'rules' => 'required'],
                'picture' => [
                    'label' => 'Image',
                    'rules' => 'uploaded[picture]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'errors' => [
                        'uploaded' => 'Ne doit pas être vide',
                        'is_image' => 'Le format de cet image est inconnu',
                    ]
                ]
            ];
            if ($this->validate($rules)) {

                $file = $this->request->getFile('picture');

                if ($file->isValid() && !$file->hasMoved()) {
                    $imageName = $file->getRandomName();
                    $data = ['picture' => $imageName];
                    
                    $this->elmtModel->update($id,$data);
                    $file->move('./resources/images/elements', $imageName);
                    return redirect()->to('/elements-list');
                }
            } else {
                $data['validation'] = $this->validation->getErrors();
            }
        }
        echo view('elements/admin/image', $data);

    }

  
    function delete($id){
        $data = [
            'service' => $this->servModel->getService($id)
        ];
        if(!empty($data)){
            $this->servModel->where('srv_id',$id)->delete();
            $session = session();
            $session->setFlashData("success", "Image supprimé avec succès");
            return redirect()->to('/service-list');
        }
    }
    
}
