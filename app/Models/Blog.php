<?php

namespace App\Models;

use CodeIgniter\Model;

class Blog extends Model
{
    protected $table            = 'blogs';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['srv_id','title','description','picture','created_at','updated_at'];

    // Validation
    protected $validationRules      = [
        'srv_id' => [
            'label' => 'Service','rules' => 'required',
            'errors' => ['required' => 'Sélectionnez un service SVP !'],
        ],
        'title' => [
            'label' => 'Titre','rules' => 'required',
            'errors' => ['required' => 'Remplissez ce champ'],
        ],
        'description' => [
            'label' => 'Description','rules' => 'required',
            'errors' => ['required' => 'Remplissez ce champ'],
        ],
        'picture' => [
            'label' => 'Image',
            'rules' => 'uploaded[picture]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[picture,200]',
            'errors' => [
                'uploaded' => 'Veuillez choisir une photo',
                'is_image' => 'Le format de cet image est inconnu',
                'max_size' => 'La taille ne doit pas dépasser 200 KB',
            ]
        ]
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
    
}
