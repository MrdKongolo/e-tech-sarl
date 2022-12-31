<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Services extends BaseController
{
    public function index()
    {
        $data = [
            'title'=> "Tous les secteurs | E-Tech",
            'coords'=> $this->coords,
            'parts' => $this->partModel->findAll(),
        ];
        return view('services/index',$data);
    }
    public function details($segment = null){
        $service = $this->servModel->getServiceBySlug($segment);
        $categ = $this->catModel->join('services','services.srv_id= categories.srv_id')
                                ->where('categories.srv_id', $service['srv_id'])
                                ->findAll();
        $data = [
            'title'=> "Détails Service",
            'coords'=> $this->coords,
            'service'=> $service,
            'categories'=> $categ,
            'parts' => $this->partModel->findAll(),
            'nb'=> count($categ)
        ];
        return view('services/details', $data);
    }    

    public function getServiceCategories($srv){
        $categ = $this->catModel->join('services','services.srv_id= categories.srv_id')
                                ->where('categories.srv_id', $srv)
                                ->findAll();
        return view('services/categories',$categ);
    }
    public function getElementsByCategory($cat){
        $categ = $this->elmtModel->join('categories','categories.cat_id= elements.cat_id')
                                ->where('elements.cat_id', $cat)
                                ->findAll();
        return view('services/categories',$categ);
    }

    public function list(){
        $data = [
            'title'     => 'Tous Les Services',
            'user_data' => session()->get('user_data'),
            'services' => $this->servModel->findAll(),
        ];
        return view('services/admin/index',$data);
    }

    public function services(){
        $data = [
            'services' => $this->servModel->findAll(),
            'coords'=> $this->coords,
            'parts' => $this->partModel->findAll(),
        ];
        return view ('services/services',$data);
    }
    

    public function create(){
        $data = [
            'title' => "Ajout Service",
            'validation' => null,
            'parts' => $this->partModel->findAll(),
        ];
        $rules = $this->servModel->getValidationRules();
        
        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {
            $file = $this->request->getFile('photo');        
            
            if ($file->isValid() && !$file->hasMoved()) {

                $imageName = $file->getRandomName();
                
                $data = array(
                    'srv_title' => $this->request->getVar('srv_title'),
                    'srv_slug' => url_title($this->request->getVar('srv_title')),
                    'srv_description' => $this->request->getVar('srv_description'),
                    'photo' => $imageName,
                    'created_at' => date('Y-m-d H:s:i'),
                );  
                $this->servModel->save($data);
                $file->move('./resources/images/services', $imageName);
                $session = session();
                $session->setFlashData("success", "Ajouté avec succès");
                return redirect()->to('/services-list');
                
            }  
        } else {
            $data['validation'] = $this->validation->getErrors();
        }
        echo view('services/admin/add', $data);
    }

    public function edit($id){
        $data = [
            'title' => 'Edit',
            'service' => $this->servModel->getService($id),
        ];
        return view('services/admin/edit',$data);
    }
    public function update(){
        $id = $this->request->getVar('srv_id');   
        $data = array(
            'srv_title'=>$this->request->getVar('srv_title'),
            'srv_description'=>$this->request->getVar('srv_description'),
            'srv_slug'=>url_title($this->request->getVar('srv_title')),
            'updated_at'=>date('Y-m-d H:s:i'),
        );
        if(!empty($data)){
            $this->servModel->update($id,$data);
            $session = session();
            $session->setFlashData("success", "Modifié avec succès !");
            return redirect()->to('/services-list');
        }else{
            echo view('services/admin/edit/'.$id);
        }
        
    }

    function image($key)
    {
        $data = [
            'service' => $this->servModel->getService($key)
        ];
        if (!empty($data['service'])) {
            session()->set('service', $data['service']);
            echo view('services/admin/image', $data);
        }
    }

    function saveImage()
    {
        $data[] = null;
        $service = session()->get('service');    
        
        $oldfile = $service['photo'];
        $path = './resources/images/services';    
        $id = $service['srv_id'];
        $data['service'] = $service;

        if ($this->request->getMethod() === 'post') {
            $rules = $this->servModel->getValidationRules(['only' => ['photo']]);
            if ($this->validate($rules)) {

                $file = $this->request->getFile('photo');

                if ($file->isValid() && !$file->hasMoved()) {
                    $imageName = $file->getRandomName();
                    $data = ['photo' => $imageName];
                    
                    if(file_exists($path .'/'. $oldfile) && $oldfile !== null){
                        unlink($path .'/'. $oldfile);
                    }
                    $this->servModel->update($id,$data);
                    $file->move($path, $imageName);
                    return redirect()->to('/services-list');
                }
            } else {
                $data['validation'] = $this->validation->getErrors();
            }
        }        
        echo view('services/admin/image', $data);
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
