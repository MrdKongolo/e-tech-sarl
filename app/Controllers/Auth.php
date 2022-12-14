<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public $docModel;

    public function __construct(){
        $this->docModel = model(DocumentModel::class);
    }

    public function about(){
        $data = [
            'title' => 'Qui nous sommes | E-Tech',
            'parts' => $this->partModel->findAll(),
            'coords'=> $this->coords,
            'accueil' => $this->accModel->first(),
            'docs'  => $this->docModel->findAll()
        ];
        return view('pages/about',$data);
    }   
    public function signin(){
        $data = [
            'title' => 'Connexion | E-Tech',
            'accueil' => $this->accModel->first(),
            'coords'=> $this->coords,
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
    function logout(){
        if(session()->has('user_data')){
            session()->remove('user_data');
            return redirect()->to(site_url());
        }
        else{
            return redirect()->to('/');
        }
    }
    public function message()
    {
        $data = [
            'title'         => "Nous Contacter'",
            'validation'    => null,
            'coords'    =>  $this->coords,
            'parts' => $this->partModel->findAll(),
        ];
        if ($this->request->getMethod() == 'post') {
            $this->validation->setRules([
                'sender' => [
                    'label' => 'Nom','rules' => 'required',
                    'errors' => ['required' => 'Votre nom est r??quis'],
                ],
                'email'       => [
                    'label'     => 'Email',
                    'rules'     => 'required|valid_email',
                    'errors'    => [
                        'required'      => 'Compl??tez votre adresse e-mail',
                        'valid_email'   => 'Entrez une adresse email valide.'
                    ]
                ],
                'phone'  => [
                    'label' => 'T??l??phone', 'rules' => 'required',
                    'errors' => [
                        'required' => 'Compl??tez votre num??ro de t??l??phone',
                    ]
                ],
                'subject'  => [
                    'label' => 'Objet', 'rules' => 'required',
                    'errors' => [
                        'required' => 'Compl??tez votre objet',
                    ]
                ],
                'message'  => [
                    'label' => 'Message', 'rules' => 'required',
                    'errors' => [
                        'required' => 'Remplissez votre message dans le champ ci-haut',
                    ]
                ],
            ]);
            $array = [];
            if ($this->validation->withRequest($this->request)->run()) {  
                
                $array = [
                    'success' => '<div class="form-messege text-success alert alert-success">Votre message a ??t?? envoy?? avec succ??s</div>',
                ];
                $data = array(
                    'sender'        => $this->request->getVar('sender'),
                    'email'         => $this->request->getVar('email'),
                    'phone'         => $this->request->getVar('phone'),
                    'message'       => $this->request->getVar('message'),
                    'subject'       => $this->request->getVar('subject'),
                ); 
                $this->sendMessageToClient($data['email'], $data['sender']);
                $this->sendMessageToAdmin($data['email'], $data['sender'],$data['phone'],$data['message']);
              
            } else {
                $array = [
                  'error' => true,
                  'sender_error' => $this->validation->getError('sender'),
                  'email_error' => $this->validation->getError('email'),
                  'phone_error' => $this->validation->getError('phone'),
                  'subject_error' => $this->validation->getError('subject'),
                  'message_error' => $this->validation->getError('message'),
                ];          
            }
            echo json_encode($array);
        }
    }
    function sendMessageToClient($to, $name){
        $subject= "Votre message laiss?? sur E-Tech";
        $this->email->setFrom('infos@e-tech-ms.com', 'E-Tech Support');
        $this->email->setTo($to);
        $this->email->setSubject($subject);
        $this->email->setMessage($this->mailContentClient($name));
        if($this->email->send()){
            return true;
        }else {
           return true;
        }
    }
    function mailContentClient($name){
        $data = [
            'user'  => $name,
            'cords' => $this->coords
        ];
        return view('mails/message', $data);
    }
    function sendMessageToAdmin($from, $name,$phone,$msg){
        $subject= "Message sur E-Tech SARL";
        $this->email->setFrom($from);
        $this->email->setTo('infos@e-tech-ms.com');
        $this->email->setSubject($subject);
        $this->email->setMessage($this->mailContentAdmin($name,$phone,$msg));
        if($this->email->send()){
            return true;
        }else {
           return true;
        }
    }
    function mailContentAdmin($name,$phone,$msg){
        $data = [
            'user'    => $name,
            'phone'   => $phone,
            'msg'     => $msg,
            'cords' => $this->coords
        ];
        return view('mails/admin', $data);
    }
}
