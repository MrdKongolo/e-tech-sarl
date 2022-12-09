<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function __construct()
    {
        
    }
    public function about(){
        $data = [
            'title' => 'Qui nous sommes | E-Tech'
        ];
        return view('pages/about',$data);
    }   
    public function signin(){
        $data = [
            'title' => 'Connexion | E-Tech'
        ];
        $rules = $this->userModel->getValidationRules();

        if($this->request->getMethod() === 'post' && $this->validate($rules)){
            $session = session();
            $data["sess"] = $this->userModel->findUserByEmail($this->request->getVar("email"));

            if (!empty($data["sess"])) {
                if (password_verify($this->request->getVar('password'), $data["sess"]["password"])) {
                    $session->set('user_data', $data["sess"]);
                    return redirect()->to('/dashboard');
                } else {
                    $session->setFlashdata('error', "Mot de passe incorrect", 5);
                }
            }
        }
        else {
            $data['validation'] = $this->validation->getErrors();
        }
        $data['title'] = "Connexion | E-Tech";
        return view('pages/signin',$data);
    }
}
