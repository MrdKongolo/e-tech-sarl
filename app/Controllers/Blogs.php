<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Blogs extends BaseController
{
    public function index()
    {
        $data =  [
            'title' => "Ajout d'un blog | E-Tech",
            'blogs'=>$this->blogModel->join('services','services.srv_id=blogs.srv_id')
                                        ->findAll(),
        ];
        return view ('blogs/admin/list', $data);
    }
    
    public function add(){
        $data =  [
            'title'=>'Ajout Blog | E-Tech',
            'services'=>$this->servModel->asObject()->findAll(),
        ];

        $rules = $this->blogModel->getValidationRules();
        
        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {

            $file = $this->request->getFile('picture');        
                
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $data = [
                    'srv_id' => $this->request->getVar('srv_id'),
                    'title' => $this->request->getVar('title'),
                    'description' => $this->request->getVar('description'),
                    'picture' => $imageName,
                    'created_at' => date('Y-m-d H:i:s'),
                ];
                if($this->blogModel->save($data)) {
                    $file->move('./resources/images/blogs', $imageName);
                    return redirect()->to('/blogs')->with('success','Blog ajouté avec succès');
                }else {
                    return redirect()->back()->with('error','Impossible d\'enregister');
                }
            }
              
        } else {
            $data['validation'] = $this->validation->getErrors();
        }

        return view ('blogs/admin/create',$data);
    }

    public function edit($id){
        $data = [
            'title' => 'Editer Produit | E-Tech',
            'blog' => $this->blogModel->find($id),
        ];
        session()->set('blog', $data['blog']);
        return view('blogs/admin/edit',$data);
    }
    public function update(){
        $blog = session()->get('blog');   
        $id = $blog['id'];   
        $data = array(
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'updated_at'=> date('Y-m-d H:i:s'),
        );
        if(!empty($data)){
            $this->blogModel->update($id,$data);
            session()->remove('blog');
            $session = session();
            $session->setFlashData("success", "Modifié avec succès !");
            return redirect()->to('/blogs');
        }else{
            echo view('blogs/admin/edit/'.$id);
        }
        
    }


    function image($key)
    {
        $data[] = null;
        $data = [
            'blog' => $this->blogModel->find($key)
        ];
        if (!empty($data['blog'])) {
            session()->set('blog', $data['blog']);
            echo view('blogs/admin/image', $data);
        } else {
            return redirect()->back();
        }
    }

    function saveImage()
    {      
        $blog = session()->get('blog');    
        $oldfile = $blog['picture'];
        $path = './resources/images/blogs'; 
        $id = $blog['id'];
        $data['blog'] = $blog;

        if ($this->request->getMethod() == 'post') {
            $rules = $this->blogModel->getValidationRules(['only' => ['picture']]);
            if ($this->validate($rules)) {

                $file = $this->request->getFile('picture');

                if ($file->isValid() && !$file->hasMoved()) {
                    $imageName = $file->getRandomName();
                    $data = ['picture' => $imageName];
                    
                    $this->blogModel->update($id,$data);
                    if(file_exists($path .'/'. $oldfile) && $oldfile !== null){
                        unlink($path .'/'. $oldfile);
                    }
                    $file->move('./resources/images/blogs', $imageName);
                    session()->remove('blog');
                    return redirect()->to('/blogs');
                }
            } else {
                $data['validation'] = $this->validation->getErrors();                
            }
        }
        echo view('blogs/admin/image', $data);

    }
  
    function delete($id){
        $blog = $this->blogModel->find($id);        
        $oldfile = $blog['picture'];
        $path = './resources/images/blogs'; 

        if(!empty($blog)){
            $this->blogModel->where('id',$id)->delete();

            if(file_exists($path .'/'. $oldfile)){
                unlink($path .'/'. $oldfile);
            }
            session()->setFlashData("success", "Blog supprimé avec succès");
            return redirect()->to('/blogs');
        }
        else {
            return redirect()->back()->with("error", "Une erreur s'est produite lors de la suppression");
        }
    }
}
