<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Moyens extends BaseController
{
    public function index()
    {
        $moyens = model(Moyen::class);
        $data = [
            'moyens' => $moyens->findAll(),
        ];
        return view('moyens/admin/list',$data);
    }
    public function add(){
        $moyens = model(Moyen::class);
        $data =  [
            'title'=>'Ajout de Moyen de Payement | E-Tech',
        ];

        $rules = $moyens->getValidationRules();
        
        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {

            $data = [
                'name' => $this->request->getVar('name'),
                'numero' => $this->request->getVar('numero'),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $moyens->save($data);
            return redirect()->to('/moyens')->with("success", "Ajouté avec succès");
              
        } else {
            $data['validation'] = $this->validation->getErrors();
        }
        return view ('moyens/admin/add',$data);
    }

    public function edit($id){
        $moyens = model(Moyen::class);
        $data = [
            'title' => 'Edit',
            'moyen' => $moyens->find($id),
        ];
        return view('moyens/admin/edit',$data);
    }
    public function update(){
        $moyens = model(Moyen::class);
        $id = $this->request->getVar('moyen');   
        $data = array(
            'name'=>$this->request->getVar('name'),
            'numero'=>$this->request->getVar('numero'),
            'updated_at'=>date('Y-m-d H:i:s'),
        );
        if(!empty($data)){
            $moyens->update($id,$data);
            return redirect()->to('/moyens')->with("success", "Modifié avec succès !");
        }else{
            echo view('moyens/admin/edit/'.$id);
        }        
    }
    function delete($id){
        $moyens = model(Moyen::class);
        $data = [
            'moyen' => $moyens->find($id),
        ];
        if(!empty($data)){
            $moyens->where('id',$id)->delete();
            return redirect()->to('/moyens')->with("success", "Moyen de payment supprimé avec succès");
        }
    }
}
