<?php

namespace App\Models;

use CodeIgniter\Model;

class Element extends Model
{
    protected $table            = 'elements';
    protected $primaryKey       = 'el_id';
    protected $allowedFields    = ['cat_id','el_title','created_at','updated_at'];


    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
