<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Services extends BaseController
{
    public function index()
    {
        $data = [
            'title'=> "Tous les secteurs | E-Tech",
            'coords'=> $this->coords
        ];
        return view('services/index',$data);
    }
    public function details($segment = null){
        $data = [
            'title'=> "Détails Service",
            'coords'=> $this->coords
        ];
        return view('services/details', $data);
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
            'coords'=> $this->coords
        ];
        return view ('services/services',$data);
    }
    

    public function create(){
        $user = session()->get('user_data');
        $data = [
            'title' => "Ajout Service",
            'validation' => null,
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
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
        );
        if(!empty($data)){
            $this->servModel->update($id,$data);
            $session = session();
            $session->setFlashData("success", "Modifié avec succès !");
            return redirect()->to('/service-list');
        }else{
            echo view('services/admin/edit/'.$id);
        }
        
    }


    function addImage($key)
    {
        $data[] = null;
        $data = [
            'service' => $this->servModel->getService($key)
        ];
        if (!empty($data['service'])) {
            echo view('services/admin/image', $data);
        } else {
            return redirect()->back();
        }
    }

    function saveImage()
    {
        $data[] = null;
        $id = $this->request->getVar('service');
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'service' => [
                    'label' => 'Service ID',
                    'rules' => 'required'],
                'picture'   => [
                    'label' => 'Image',
                    'rules' => 'uploaded[picture]|is_image[picture]',
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
                    
                    $this->servModel->update($id,$data);
                    $file->move('./resources/images/services', $imageName);
                    return redirect()->to('/service-list');
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
