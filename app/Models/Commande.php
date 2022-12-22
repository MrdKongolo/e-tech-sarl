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
            'label' => 'Preuve','rules' => 'required|is_unique[commandes.proof]',
            'errors' => [
                'required' => 'Complétez la preuve',
                'is_unique' => 'Cette preuve a déjà été enregistré'
            ],
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
