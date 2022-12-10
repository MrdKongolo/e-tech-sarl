<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Categories extends BaseController
{
    public function index()
    {
        $data =  [
            'title' => 'Ajout de catégorie | E-Tech',
            'categories'=>$this->catModel->join('services','services.srv_id=categories.srv_id')
                                            ->findAll(),
        ];
        return view ('categories/admin/list', $data);
    }
    public function add(){
        $data =  [
            'title'=>'Ajout de catégorie | E-Tech',
            'services'=>$this->servModel->asObject()->findAll(),
        ];

        $rules = $this->catModel->getValidationRules();
        
        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {

            $data = [
                'srv_id' => $this->request->getVar('srv_id'),
                'cat_title' => $this->request->getVar('cat_title'),
                'cat_slug' => url_title($this->request->getVar('cat_title')),
              
                'created_at' => date('Y-m-d H:s:i'),
            ];
            $this->catModel->save($data);
            $session = session();
            $session->setFlashData("success", "Ajouté avec succès");
            return redirect()->to('/categories-list');
              
        } else {
            $data['validation'] = $this->validation->getErrors();
        }

        return view ('categories/admin/add',$data);
    }

    public function getCoursLevel(int $level){
        $cours = $this->coursModel->join('levels','cours.level= levels.level_id')
                                ->where('level', $level)
                                ->findAll();
        return json_encode($cours);
    }
}
