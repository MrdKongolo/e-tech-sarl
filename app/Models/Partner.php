<?php

namespace App\Models;

use CodeIgniter\Model;

class Partner extends Model
{   
    protected $table            = 'partners';
    protected $primaryKey       = 'part_id';
    protected $allowedFields    = ['part_name','part_logo','address','city', 'country','part_email','part_tel','created_at','updated_at'];

    // Validation
    protected $validationRules      = [
        'part_name'   => [
            'label' => 'Nom Complet', 'rules' => 'required',
            'errors' => [
                'required' => 'Complètez ce champ',
            ]
        ],
        'address'    => [
            'label' => 'Adresse', 'rules' => 'required',
            'errors' => [
                'required' => 'Complètez ce champ',
            ]
        ],        
        'city'    => [
            'label' => 'Ville', 'rules' => 'required',
            'errors' => [
                'required' => 'Complètez ce champ',
            ]
        ],
        'country'    => [
            'label' => 'Pays', 'rules' => 'required',
            'errors' => [
                'required' => 'Complètez ce champ',
            ]
        ],
        'part_email'    => [
            'label' => 'Email', 'rules' => 'required',
            'errors' => [
                'required' => 'Complètez ce champ',
            ]
        ],
        
        'part_tel'  => [
            'label' => 'Téléphone', 'rules' => 'required',
            'errors' => [
                'required' => 'Complètez ce champ',
            ]
        ],
        'part_logo' => [
            'label' => 'Image',
            'rules' => 'uploaded[part_logo]|is_image[part_logo]|max_size[part_logo,200]',
            'errors' => [
                'uploaded' => 'Ne doit pas être vide',
                'is_image' => 'Le format de cet image est inconnu',
                'max_size' => 'La taille ne doit pas dépasser 200 Ko', 
            ]
        ] 
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
