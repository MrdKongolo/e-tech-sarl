<?php

namespace App\Models;

use CodeIgniter\Model;

class Element extends Model
{
    protected $table            = 'elements';
    protected $primaryKey       = 'el_id';
    protected $allowedFields    = ['cat_id','el_title','created_at','updated_at','price_inf', 'price_max','units','picture'];


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
            'label' => 'Produit','rules' => 'required',
            'errors' => ['required' => 'Remplissez ce champ'],
        ],
        'price_inf' => [
            'label' => 'Prix','rules' => 'required',
            'errors' => ['required' => 'Remplissez ce champ'],
        ],
        'units' => [
            'label' => 'Remplissez l\'unité de vente','rules' => 'required',
            'errors' => ['required' => 'Unité de vente'],
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

    public function getElementsByCategory($cat){
        if($cat === null){
            return false;
        }
        return $this->where(['cat_id'=> $cat])->findAll();
    }
    public function getElement($id){
        if($id === null){
            return false;
        }
        return $this->where(['el_id'=> $id])->first();
    }
}
