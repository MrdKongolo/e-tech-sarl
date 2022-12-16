<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    function dashboard(){
        $data = [
            'title' => 'Dashboard | E-Tech',
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
                        'rules' => 'uploaded[photo]|max_size[photo, 4096]|is_image[photo]'
                    ]
            ];
            if ($this->validate($rules)) {

                $path = './resources/images/mrd';
                $path_user = './resouces/images/user';

                $file = $this->request->getFile('picture');
                $imageName = $file->getRandomName();

                if ($file->isValid() && !$file->hasMoved()) {
                    $file->move($path, $imageName);

                    // resizing image
                    \Config\Services::image()->withFile($path . '/' . $imageName)
                        ->fit(80, 80, 'center')
                        ->save($path_user . '/' . $imageName);

                    $data = ['u_picture' => $imageName];

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
    function active($u_id){
        $data = $this->userModel->findUserByID($u_id);
        $id = $data['u_id'];
        if(!empty($data)) {
            if($data['status'] == 'desabled'){
                $data['status'] ='active';
            }elseif ($data['status'] == 'active'){
                $data['status'] = 'desabled';
            }
            else{
                return redirect()->back();
            }
            $this->userModel->update($id, $data);
        }else{
            return redirect()->back();
        }
        return redirect()->to('list-users');   
    }  
}
