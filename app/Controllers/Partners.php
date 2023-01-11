<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Country;

class Partners extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Les Partenaires | E-Tech SARL',
            'partners' => $this->partModel->findAll()
        ];
        return view('partners/list',$data);
    }
    public function add (){
        $countries = model(Country::class);
        $data = [
            'title' => 'Ajouter Partenaire | E-Tech SARL',
            'countries' => $countries->asObject()->findAll()
        ];
        $data['validation'] = null;
        $rules = $this->partModel->getValidationRules();

        if (($this->request->getMethod() === 'post') && $this->validate($rules)) {            

            $file = $this->request->getFile('part_logo'); 

            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();                    

                $data = array(
                    'part_name'=> $this->request->getVar('part_name'),
                    'address'=> $this->request->getVar('address'),
                    'city'=> $this->request->getVar('city'),
                    'country' => $this->request->getVar('country'),
                    'part_email'=> $this->request->getVar('part_email'),
                    'part_tel' => $this->request->getVar('part_tel'),
                    'part_logo' => $imageName,
                    'created_at'=> date('Y-m-d H:i:s'),
                ); 
                $this->partModel->insert($data);
                $file->move('./resources/images/partners', $imageName);
                return redirect()->to('/partners-list')->with('success',"Partenaire créé avec succès !");                                  
            }
        } else {
            $data['validation'] = $this->validation->getErrors();
        }
        $data['title'] = 'E-Tech SARL | Les Partenaires';
        echo view('partners/add', $data); 
    }

}
