<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Teams extends BaseController
{
    public function index()
    {
        $data = [            
            'title'  => 'L\'Equipe | E-Tech',
            'members'=> $this->teamModel->getMembers(null),
            'nombre' => $this->teamModel->countAll(),
            'accueil'=> $this->accModel->first(),
            'coords' => $this->coordModel->first(),
        ];
        return view('team/index',$data);
    }
    public function list(){
        $data = [
            'user_data' => session()->get('user_data'),
            'title'     => 'Les Membres | E-Tech',
            'members'   => $this->teamModel->asObject()->findAll()
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

            $path_user = './resources/images/team';
            $tempfile = $file->getTempName();
            
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();                    

                $data = array(
                    'firstname'     => $this->request->getVar('firstname'),
                    'lastname'      => $this->request->getVar('lastname'),
                    'phone'         => $this->request->getVar('phone'),
                    'profession'    => $this->request->getVar('profession'),
                    'created_at'    => date('Y-m-d H:i:s'),
                    'picture'       => $imageName,
                ); 
                $this->teamModel->insert($data);

                // resizing image
                \Config\Services::image()->withFile($tempfile)
                    ->fit(450, 550, 'center')
                    ->save($path_user . '/' . $imageName);
                    
                return redirect()->to('/team-list')->with('success',"Membre créé avec succès !");                    
                 
            } 
        }else {
            $data['validation'] = $this->validation->getErrors();
        }
        $data['title'] = 'E-Tech SARL | Les Membres';
        echo view('team/admin/create', $data);
    }

    function image($member=null)
    {
        $data = [
            'member' => $this->teamModel->getMember($member)
        ];
        if (!empty($data['member'])) {
            session()->set('member', $data['member']);
            echo view('team/admin/image', $data);
        }
    }

    function saveImage()
    {
        $data[] = null;
        $member = session()->get('member');    
        
        $oldfile = $member['picture'];
        $path = './resources/images/team';    
        $id = $member['member_id'];
        $data['member'] = $member;

        if ($this->request->getMethod() === 'post') {
            $rules = $this->teamModel->getValidationRules(['only' => ['picture']]);
            if ($this->validate($rules)) {

                $file = $this->request->getFile('picture');
                $tempfile = $file->getTempName();

                if ($file->isValid() && !$file->hasMoved()) {
                    $imageName = $file->getRandomName();
                    $data = ['picture' => $imageName];
                    
                    if(file_exists($path .'/'. $oldfile) && $oldfile !== null){
                        unlink($path .'/'. $oldfile);
                    }
                    $this->teamModel->update($id,$data);

                    \Config\Services::image()->withFile($tempfile)
                        ->fit(450, 550, 'center')
                        ->save($path . '/' . $imageName);
                        
                    session()->remove('member');
                    return redirect()->to('/team-list')->with('success',"Image enregistrée avec succès");
                }
            } else {
                $data['validation'] = $this->validation->getErrors();
            }
        }        
        echo view('team/admin/image', $data);
    }
    function delete($id){
        $member = $this->teamModel->getMember($id);
        if(!empty($member)){
            $this->teamModel->where('member_id',$id)->delete();
            return redirect()->to('team-list')->with("success", "Utilisateur supprimé avec succès");
        }else {
            return redirect()->back();
        }
    }
    public function edit($id){
        $data = [
            'member' => $this->teamModel->getMember($id)
        ];
        if (!empty($data['member'])) {
            session()->set('member', $data['member']);
            echo view('team/admin/edit', $data);
        }
    }
    public function update(){
        $id = $this->request->getVar('srv_id');   
        $member = session()->get('member');       
        $id = $member['member_id'];
        $data['member'] = $member;
        $data = array(
            'firstname'  => $this->request->getVar('firstname'),
            'lastname'   => $this->request->getVar('lastname'),
            'phone'      => $this->request->getVar('phone'),
            'profession' => $this->request->getVar('profession'),
            'updated_at' =>date('Y-m-d H:i:s'),
        );
        if(!empty($data)){
            $this->teamModel->update($id,$data);
                
            session()->remove('member');
            return redirect()->to('/team-list')->with('success',"Membre modifié avec succès");
        }else{
            echo view('services/admin/edit/'.$id);
        }
        
    }
}
