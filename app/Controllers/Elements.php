<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Elements extends BaseController
{
    // public function index()
    // {
    //     $data =  [
    //         'title' => 'Ajout de catégorie | E-Tech',
    //         // 'categories'=>$this->catModel->join('services','services.srv_id=categories.srv_id')
    //                                         // ->findAll(),
    //     ];
    //     return view ('elements/admin/list', $data);
    // }
    public function add(){
        $data =  [
            'title'=>'Ajout élément | E-Tech',
            'services'=>$this->servModel->asObject()->findAll(),
        ];

        $rules = $this->elmtModel->getValidationRules();
        
        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {

            $data = [
                'srv_id' => $this->request->getVar('srv_id'),
                'cat_id' => $this->request->getVar('cat_id'),
                'el_title' => $this->request->getVar('el_title'),
                'created_at' => date('Y-m-d H:s:i'),
            ];
            $this->elmtModel->save($data);
            return redirect()->back()->with('success','Elément ajouté avec succès');
              
        } else {
            $data['validation'] = $this->validation->getErrors();
        }

        return view ('elements/admin/add',$data);
    }
    
}
