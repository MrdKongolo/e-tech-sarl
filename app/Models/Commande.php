<?php

namespace App\Models;

use CodeIgniter\Model;

class Commande extends Model
{
    protected $table            = 'commandes';
    protected $primaryKey       = 'cmd_id';
    protected $allowedFields    = ['hash','client','mean','proof','phone','amount','status','created_at','proof','updated_at'];    

    public function getCommande($cde){
        if($cde === null){
            return $this->findAll();
        }
        return  $this->where(['cmd_id' => $cde])->first();
    }
    public function getCommandeByHash($hash){
        if($hash === null){
            return false;
        }
        return  $this->where(['hash' => $hash])->first();
    }

    // Validation
    protected $validationRules      = [     
        'mean' => [
            'label' => 'Moyen','rules' => 'required',
            'errors' => ['required' => 'Aucun moyen de paiment séléctionné'],
        ],
        'proof' => [
            'label' => 'Image',
            'rules' => 'uploaded[proof]|is_image[proof]|mime_in[proof,image/jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[proof,1024]',
            'errors' => [
                'uploaded' => 'Veuillez télécharger votre preuve',
                'is_image' => 'Le format de cet image est inconnu',
                'max_size' => 'La taille ne doit pas dépasser 1MB',
            ]
        ],
        'client' => [
            'label' => 'Client','rules' => 'required',
            'errors' => ['required' => 'Complétez votre nom'],
        ],
        'amount' => [
            'label' => 'Montant','rules' => 'required',
            'errors' => ['required' => 'Complétez le montant envoyé'],
        ],
        'phone' => [
            'label' => 'Téléphone','rules' => 'required',
            'errors' => ['required' => 'Complétez le numéro téléphone'],
        ],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
