<?php

namespace App\Requests;

use App\Controllers\BaseController;

class ServiceFormRequest extends BaseController {

    public function render (){
        $data = [
            'srv_title' => $this->request->getVar('srv_title'),
            'srv_description' => $this->request->getVar('srv_description'),
            'srv_slug' => url_title($this->request->getVar('srv_description')),
            // 'photo' => $imageName,
            'created_at' => date('Y-m-d H:s:i'),
        ]; 
        return $data;
    }
}