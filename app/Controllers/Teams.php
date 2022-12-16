<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Teams extends BaseController
{
    public function index()
    {
        $data = [            
            'title'  => 'L\'Equipe | E-Tech',
            'members'   => $this->teamModel->getMembers(null),
            'nombre' => $this->teamModel->countAll(),
            'coords'    => $this->coordModel->first(),
        ];
        return view('team/index',$data);
    }
    public function list(){
        $data = [
            'user_data' => session()->get('user_data'),
            'title'     => 'Les Membres | E-Tech',
            'members'   => $this->teamModel->asObject()->getMembers(null)
        ];
        return view('team/admin/list',$data);
    }

    public function create()
    {
        $data = [];
        $data['validation'] = null;
        $rules = $this->teamModel->getValidationRules();
        if (($this->request->getMethod() === 'post') && $this->validate($rules)) {            

            $file = $this->request->getFile('picture'); 

            $path = './resources/images/redeem';
            $path_user = './resources/images/team';

            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();                    

                $data = array(
                    'firstname'     => $this->request->getVar('firstname'),
                    'lastname'      => $this->request->getVar('lastname'),
                    'phone'         => $this->request->getVar('phone'),
                    'profession'    => $this->request->getVar('profession'),
                    'created_at'    => date("Y-m-d"),
                    'picture'       => $imageName,
                ); 
                $this->teamModel->insert($data);

                $file->move($path, $imageName);

                // resizing image
                \Config\Services::image()->withFile($path . '/' . $imageName)
                    ->fit(450, 550, 'center')
                    ->save($path_user . '/' . $imageName);
                    
                return redirect()->to('/team-list')->with('success',"Membre créé avec succès !");                    
                 
            } else {
                $data['validation'] = $this->validation->getErrors();
            }
        }
        $data['title'] = 'E-Tech SARL | Les Membres';
        echo view('team/admin/create', $data);
    }
}
