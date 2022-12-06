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
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        return view('pages/' .$page);
    }
}
