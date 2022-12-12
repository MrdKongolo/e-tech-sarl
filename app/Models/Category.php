<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table            = 'categories';
    protected $primaryKey       = 'cat_id';
    protected $allowedFields    = ['srv_id','cat_title','cat_slug','cat_description','created_at','updated_at'];

    // Validation
    protected $validationRules      = [
        'srv_id' => [
            'label' => 'Service','rules' => 'required',
            'errors' => ['required' => 'Sélectionnez un service SVP !'],
        ],
        'cat_title' => [
            'label' => 'Catégorie','rules' => 'required|is_unique[categories.cat_title]',
            'errors' => ['required' => 'La catégorie est réquise','is_unique' => 'Cette catégorie a été déjà été prise'],
        ],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}
