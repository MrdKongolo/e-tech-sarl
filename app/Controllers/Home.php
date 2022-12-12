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
        ];
        return view('pages/' .$page, $data);
    }

    public function team(){
        $data = [
            'title' => 'Equipe | E-Tech'
        ];
        return view ('team/index', $data);
    }
}
