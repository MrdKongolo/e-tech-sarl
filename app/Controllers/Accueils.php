<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Accueils extends BaseController
{
    public function edit()
    {        
        $data = [            
            'accueil'    => $this->accModel->first(),
        ];
        return view('documents/admin/accueil',$data);
    }
   
    function update()
    {
        $accueil = $this->accModel->first();
        if ($this->request->getMethod() === 'post') {
            $data = array(
                'title'=>$this->request->getVar('title'),
                'subtitle'=>$this->request->getVar('subtitle'),
                'description'=>$this->request->getVar('description'),
                'updated_at'=>date('Y-m-d H:s:i'),
            );
            $this->accModel->update($accueil['id'],$data);                    
            return redirect()->to("/dashboard")->with("success", "Modifié avec succès !");            
        }
        return redirect()->back()->with("error", "Une erreur s'est produite !");  
    }     
    
}
