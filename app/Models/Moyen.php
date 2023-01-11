<?php

namespace App\Models;

use CodeIgniter\Model;

class Moyen extends Model
{
    protected $table            = 'means';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name','numero','created_at','updated_at'];


    // Validation
    protected $validationRules      = [
        'name' => [
            'label' => 'Service','rules' => 'required|is_unique[services.srv_title]',
            'errors' => ['required' => 'Le nom est réquis','is_unique' => 'Ce nom a été déjà été pris'],
        ],
        'numero' => [
            'label' => 'Description','rules' => 'required',
            'errors' => ['required' => 'La déscription est réquise'],
        ],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}
