<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Coords extends BaseController
{
    public $coordModel; 
   public function __construct()
   {
       $this->coordModel = model(CoordonneeModel::class);
   }
    public function index()
    {   
        $data = [
            'title'     => 'Les Coordonnées',
            'user_data' =>  session()->get('user_data'),
            'coords'    =>  $this->coordModel->first(),
        ];
        return view ('coords/admin/details',$data);
    }
    function update()
    {
        $coords = $this->coordModel->first();
        if (!empty($coords)) {
            if ($this->request->getMethod() == 'post') {
                $data = $_POST;
                if (!empty($data))
                {
                    $this->coordModel->update($coords['id'],$data);                    
                    return redirect()->to("/dashboard");
                }
            }
        } else {
            return redirect()->back();
        }
    }
}
