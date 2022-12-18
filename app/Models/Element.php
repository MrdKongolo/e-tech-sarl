<?php

namespace App\Models;

use CodeIgniter\Model;

class Element extends Model
{
    protected $table            = 'elements';
    protected $primaryKey       = 'el_id';
    protected $allowedFields    = ['cat_id','el_title','created_at','updated_at'];


    // Validation
    protected $validationRules      = [
        'srv_id' => [
            'label' => 'Service','rules' => 'required',
            'errors' => ['required' => 'Sélectionnez un service SVP !'],
        ],
        'cat_id' => [
            'label' => 'Catégorie','rules' => 'required',
            'errors' => ['required' => 'Sélectionnez un service SVP !'],
        ],
        'el_title' => [
            'label' => 'Eléments','rules' => 'required',
            'errors' => ['required' => 'Remplissez ce champ'],
        ],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function getElementsByCategory($cat){
        if($cat === null){
            return false;
        }
        return $this->where(['cat_id'=> $cat])->findAll();
    }
}
