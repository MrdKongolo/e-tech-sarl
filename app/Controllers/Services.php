<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Services extends BaseController
{
    public function index()
    {
        $data = [
            'title'=> "Tous les secteurs | E-Tech",
        ];
        return view('services/index',$data);
    }

    public function details($segment = null){
        $data = [
            'title'=> "Détails Service",
        ];
        return view('services/details', $data);
    }
}
