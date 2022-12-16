<?php

namespace App\Models;

use CodeIgniter\Model;

class Coord extends Model
{
    protected $table            = 'coordonnees';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name','address','phone','email','created_at']; 
}
