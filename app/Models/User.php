<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'u_id';
    protected $allowedFields    = ['username','email','password','photo','role','created_at'];

    /** Getting all Users
     * @param $id
     * @return array|object|null
     */
    public function findUserByEmail($email){
        if($email === null){
            return $this->findAll();
        }
        return  $this->where(['email' => $email])->first();
    }
    public function findUserByID($id){
        return  $this->where(['u_id' => $id])->first();
    }
   
    // Validation
    protected $validationRules      = [
        'email' => [
            'label' => 'Email',
            'rules' => 'required|valid_email|is_not_unique[users.email]',
            'errors' => [
                'required' => 'Complètez ce champ',
                'valid_email' => "Cette adresse mail n'est pas valide",
                'is_not_unique' => "Cet utilisateur n'existe pas dans le système",
            ]
        ],
        'password' => [ 
            'label' => 'Password',
            'rules' => 'required',
            'errors' => [
                'required' => 'Complètez le mot de passe',
            ]
        ],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}
