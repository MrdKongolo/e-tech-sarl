<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        //
    }
   

    function dashboard(){
        $data = [
            'title' => 'Dashboard | E-Tech',
        ];
        return view('users/dashboard',$data);
    }
}
