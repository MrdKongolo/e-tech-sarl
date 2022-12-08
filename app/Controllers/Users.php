<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        //
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

    function dashboard(){
        $data = [
            'title' => 'Dashboard | E-Tech',
        ];
        return view('users/dashboard',$data);
    }
}
