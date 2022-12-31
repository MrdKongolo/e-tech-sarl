<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'views/pages/' . $page . '.php')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        
        $data = [
            'services' => $this->servModel->findAll(),
            'parts' => $this->partModel->findAll(),
            'accueil' => $this->accModel->first(),
            'coords'=> $this->coords
        ];
        return view('pages/' .$page, $data);
    }

    public function team(){
        $data = [
            'title' => 'Equipe | E-Tech',
            'coords'=> $this->coords,
            'team' => $this->teamModel->findAll()
        ];
        return view ('team/index', $data);
    }
    public function why(){
        return view('pages/why');
    }
    public function contact(){
        $data = [
            'title' => 'Contact | E-Tech',
            'coords'=> $this->coords,
            'parts' => $this->partModel->findAll(),
        ];
        return view('pages/contact', $data);
    }
    public function blog(){
        $data = [
            'title' => 'Réalisations',
            'parts' => $this->partModel->findAll(),
            'coords'=> $this->coords,
        ];
        return view ('pages/blog',$data);
    }
}
