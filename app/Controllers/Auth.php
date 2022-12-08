<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function __construct()
    {
        
    }
    public function about(){
        $data = [
            'title' => 'Qui nous sommes | E-Tech'
        ];
        return view('pages/about',$data);
    }   
}
