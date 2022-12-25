<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    function dashboard(){
        $data = [
            'title' => 'Dashboard | E-Tech',
            'serv' => $this->servModel->countAll(),
            'cat' => $this->catModel->countAll(),
            'prod' => $this->elmtModel->countAll(),
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

    public function profile(){
        $user_data = session()->get('user_data');
        return view('users/admin/profile',compact('user_data'));
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

                    if(file_exists($path_user .'/'. $oldfile) && $oldfile !== null){
                        unlink($path_user .'/'. $oldfile);
                    }

                    // resizing image
                    \Config\Services::image()->withFile($tempfile)
                        ->fit(80, 80, 'center')                        
                        ->save($path_user . '/' . $imageName);

                    $data = ['photo' => $imageName];

                    $id = $user['u_id'];
                    $this->userModel->update($id, $data);

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
}
