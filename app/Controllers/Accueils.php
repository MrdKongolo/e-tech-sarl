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
    
    public function image()
    {        
        $data = [            
            'accueil'    => $this->accModel->first(),
        ];
        if (!empty($data['accueil'])) {
            session()->set('accueil', $data['accueil']);
            return view('coords/image',$data);
        } else {
            return redirect()->back();
        }
    }

    function saveImage()
    {
        $data[] = null;           
        $accueil = session()->get('accueil');  
        $oldfile = $accueil['photo'];
        $path = './resources/images/slider';    
        $id = $accueil['id'];
        $data['accueil'] = $accueil;

        if ($this->request->getMethod() === 'post') {
            $rules = $this->accModel->getValidationRules(['only' => ['photo']]);
            if ($this->validate($rules)) {

                $file = $this->request->getFile('photo');

                if ($file->isValid() && !$file->hasMoved()) {
                    $imageName = $file->getRandomName();
                    $data = ['photo' => $imageName];
                    
                    if(file_exists($path .'/'. $oldfile) && $oldfile !== null){
                        unlink($path .'/'. $oldfile);
                    }
                    $this->accModel->update($id,$data);
                    $file->move($path, $imageName);
                    session()->remove('accueil');
                    return redirect()->to('/dashboard')->with('error', "Image ajoutée avec succès");
                }
            } else {
                $data['validation'] = $this->validation->getErrors();
            }
        }        
        echo view('coords/image', $data);
    }
    
}
