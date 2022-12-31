<?php

namespace App\Models;

use CodeIgniter\Model;

class Team extends Model
{
    protected $table            = 'team';
    protected $primaryKey       = 'member_id';
    protected $allowedFields    = ['firstname','lastname','profession','phone','picture','created_at','updated_at'];


    // Validation
    protected $validationRules      = [
        'firstname'   => [
            'label' => 'Prénom', 'rules' => 'required',
            'errors' => [
                'required' => 'Complètez ce champ',
            ]
        ],
        'lastname'    => [
            'label' => 'Nom', 'rules' => 'required',
            'errors' => [
                'required' => 'Complètez ce champ',
            ]
        ],        
        'profession'    => [
            'label' => 'Profession', 'rules' => 'required',
            'errors' => [
                'required' => 'Complètez ce champ',
            ]
        ],
        
        'phone'  => [
            'label' => 'Téléphone', 'rules' => 'required',
            'errors' => [
                'required' => 'Complètez ce champ',
            ]
        ],
        'picture' => [
            'label' => 'Image',
            'rules' => 'uploaded[picture]|is_image[picture]|max_size[picture,1024]',
            'errors' => [
                'uploaded' => 'Ne doit pas être vide',
                'is_image' => 'Le format de cet image est inconnu',
                'max_size' => 'La taille ne doit pas dépasser 1 Mo', 
            ]
        ]
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function getMember($id){
        if($id === null){
            return false;
        }
        return  $this->where(['member_id' => $id])->first();
    }
}
