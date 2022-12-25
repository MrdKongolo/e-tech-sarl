<?php

namespace App\Models;

use CodeIgniter\Model;

class Service extends Model
{
    protected $table            = 'services';
    protected $primaryKey       = 'srv_id';
    protected $allowedFields    = ['srv_title','srv_slug','srv_description','photo','created_at','updated_at'];

    // Validation
    protected $validationRules      = [
        'srv_title' => [
            'label' => 'Service','rules' => 'required|is_unique[services.srv_title]',
            'errors' => ['required' => 'Le nom est réquis','is_unique' => 'Ce nom a été déjà été pris'],
        ],
        'srv_description' => [
            'label' => 'Description','rules' => 'required',
            'errors' => ['required' => 'La déscription est réquise'],
        ],
        'photo' => [
            'label' => 'Image',
            'rules' => 'uploaded[photo]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
            'errors' => [
                'uploaded' => 'Ne doit pas être vide',
                'is_image' => 'Le format de cet image est inconnu',
            ]
        ]
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function getService($id){
        if($id === null){
            return false;
        }
        return  $this->where(['srv_id' => $id])->first();
    }
    public function getServiceBySlug($slug){
        if($slug === null){
            return false;
        }
        return  $this->where(['srv_slug' => $slug])->first();
    }

}
