<?php

namespace App\Models;

use CodeIgniter\Model;

class Document extends Model
{
    protected $table            = 'documents';
    protected $primaryKey       = 'doc_id';
    protected $allowedFields    = ['name','created_at','file'];   

     // Validation
     protected $validationRules      = [
        'name' => [
            'label' => 'name', 
            'rules' => 'required|is_unique[documents.name]',
            'errors' => [
                'required' => 'Completez le nom du document ici',
                'is_unique' => 'Ce nom est déjà enregistré'
            ]
        ],
        'file' => [
           'label' => 'document',
           'rules' => 'uploaded[file]|ext_in[file,pdf]',
           'errors' => [
               'uploaded' => 'Cannot be empty',
               'ext_in' => 'The format file must be a pdf'
           ]
       ]
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function findDocumentByID($id){
        if($id === null){
            return $this->findAll();
        }
        return  $this->where(['doc_id' => $id])->first();
    } 
}
