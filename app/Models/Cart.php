<?php

namespace App\Models;

use CodeIgniter\Model;

class Cart extends Model
{
    protected $table            = 'carts';
    protected $primaryKey       = 'cart_id';
    protected $allowedFields    = ['hash','client','phone','prod_id','quantity','total','status','created_at','updated_at'];

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function getCart($id){
        if($id === null){
            return $this->findAll();
        }
        return  $this->where(['cart_id' => $id])->first();
    }
    public function getCartByHash($hash){
        if($hash === null){
            return $this->findAll();
        }
        return  $this->where(['hash' => $hash])->findAll();
    }
}
