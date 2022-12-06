<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Projects extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tous les projets | E-Tech',
        ];
        return view('projects/index', $data);
    }
}
