<?php

namespace App\Models;

use CodeIgniter\Model;

class Accueil extends Model
{
    protected $table            = 'accueil';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['title','subtitle','description','photo','created_at','updated_at'];

    // Validation
    protected $validationRules      = [
        'title' => [
            'label' => 'Produit','rules' => 'required',
            'errors' => ['required' => 'Remplissez ce champ'],
        ],
        'subtitle' => [
            'label' => 'Prix','rules' => 'required',
            'errors' => ['required' => 'Remplissez ce champ'],
        ],
        'description' => [
            'label' => 'Description','rules' => 'required',
            'errors' => ['required' => 'Remplissez le texte ici'],
        ],
        'photo' => [
            'label' => 'Image',
            'rules' => 'uploaded[photo]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[photo,500]',
            'errors' => [
                'uploaded' => 'Veuillez choisir une photo',
                'is_image' => 'Le format de cet image est inconnu',
                'max_size' => 'La taille ne doit pas dépasser 500 KB',
            ]
        ]
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
