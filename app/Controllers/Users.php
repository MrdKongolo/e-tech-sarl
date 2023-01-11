<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;

class Users extends BaseController
{
    public $quotes;
    public $moyens;
    public function __construct(){
        helper('date');
        $this->quotes = model(Commande::class);
        $this->moyens = model(Commande::class);
    }

    function dashboard(){
        $data = [
            'title' => 'Dashboard | E-Tech',
            'serv'  => $this->servModel->countAll(),
            'cat'   => $this->catModel->countAll(),
            'coords'=> $this->coords,
            'prod'  => $this->elmtModel->countAll(),
            'moyens'=> $this->moyens->countAll(),
            'docs'  => $this->docModel->countAll(),
            'blogs' => $this->blogModel->countAll(),
            'part'  => $this->partModel->countAll(),
        ];
        return view('users/dashboard',$data);
    }

    public function index()
    {
        $data = [
            'user_data' => session()->get('user_data'),
            'title'     => 'Les Utilisateurs | E-Tech',
            'users'     => $this->userModel->asObject()->findUserByID(null)
        ];
        return view('users/admin/index',$data);
    }

    function profile()
    {
        $user_data = session()->get('user_data');
        $data = [
            'user_data' => $user_data,
            'title'     => 'Profile',
            'coords'=> $this->coords,
            'quotes'    => $this->quotes->asObject()->findAll(),           
        ];
       
        echo view('users/admin/profile', $data);
    }

    function addImage()
    {
        $session_data = session()->get('user_data');
        $data[] = null;
        $user_id = $session_data['u_id'];
        $data['user'] = $this->userModel->findUserByID($user_id);

        if (!empty($data['user'])) {
            echo view('users/admin/image',$data);
        } else {
            return redirect()->back();
        }
    }

    function saveImage()
    {
        $data[] = null;
        $user = session()->get('user_data');
        
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'photo' =>
                    [
                        'label' => 'Image',
                        'rules' => 'uploaded[photo]|max_size[photo,500]|is_image[photo]'
                    ]
            ];
            if ($this->validate($rules)) {

                $path_user = './resources/images/user';
                $file = $this->request->getFile('photo');
                $imageName = $file->getRandomName();
                $tempfile = $file->getTempName();
                $oldfile = $user['photo'];
                if ($file->isValid() && !$file->hasMoved()) {

                    // Check if another user image file exists and then delete it
                    if(file_exists($path_user .'/'. $oldfile) && $oldfile !== null){
                        unlink($path_user .'/'. $oldfile);
                    }
                    
                    $data = ['photo' => $imageName];
                    
                    $id = $user['u_id'];
                    $this->userModel->update($id, $data);

                    // resizing image
                    \Config\Services::image()->withFile($tempfile)
                        ->fit(80, 80, 'center')                        
                        ->save($path_user . '/' . $imageName);

                    $data["sess_data"] = $this->userModel->findUserByID($id);
                    session()->set('user_data', $data["sess_data"]);
                    return redirect()->to('/profile');
                }
            } else {
                $data['validation'] = $this->validation->getErrors();
            }
        }
        echo view('users/admin/image', $data);
    }
    function deleteUser($id){
        $user_data = session()->get('user_data');
        $user = $this->userModel->findUserByID($id);
        if(!empty($user)){
            $this->userModel->where('u_id',$id)->delete();
            $session = session();
            $session->setFlashData("success", "Utilisateur supprimé avec succès");
            return redirect()->to('list-users');
        }
    }
    function updateOneSelf()
    {
        if (!empty($session_data)) {
            if ($this->request->getMethod() == 'post') {
                $id = $session_data['id'];
                $data = $_POST;
                if (!empty($data))
                {
                    $this->userModel->update($id,$data);
                    $data["sess_data"] = $this->userModel->findUserByID($id);
                    session()->set('user_data', $data["sess_data"]);
                    return redirect()->to("/profile");
                }
            }
        } else {
            return redirect()->to("/logout");
        }
    }
    function change(){

        $data = [];
        $user_data = session()->get('user_data');
        $data['password'] = $user_data['password'];

        if ($this->request->getMethod() == 'post'){

            $this->validation->setRules([
                'current_password' => [
                    'label' => 'Mot de Passe Actuel',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Ne peut pas être vide',
                    ]
                ],
                'new_password' => [
                    'label' => 'Nouveau Mot de Passe',
                    'rules' => 'required|min_length[6]',
                    'errors' => [
                        'required' => 'Ne peut pas être vide',
                        'min_length' => 'Pas moins de 6 caractères'
                    ]
                ],
                'conf_new_password' => [
                    'label' => 'Confirmer Mot de Passe',
                    'rules' => 'required|matches[new_password]',
                    'errors' => [
                        'required' => 'Ne peut pas être vide',
                        'matches' => 'Les deux mots de passe ne correspondent pas'
                    ]
                ],
            ]);
            if ($this->validation->withRequest($this->request)->run()) {
                $curr_password = $this->request->getVar("current_password");
                if(password_verify($curr_password, $data['password'])){
                    $data = array(
                        'password' => Hash::make($this->request->getVar('new_password'))
                    );
                    $this->userModel->update($user_data['u_id'],$data);
                    return redirect()->to('/profile')->with("success", "Mot de passe changé avec succès !");
                }else{
                    session()->setFlashData("error", "L'ancien mot de passe entré n'est pas correct !");
                }
            }else{
                $data['validation'] = $this->validation->getErrors();
                return view('pages/change',$data);
            }
        }
        $data['title'] = "Changement de mot de passe";
        echo view('pages/change', $data);
    }
}
