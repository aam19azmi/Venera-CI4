<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table            = 'products';
    protected $allowedFields    = array('id', 'name', 'description', 'picture', 'stock', 'price', 'created_at');

    public $rules               = [
          'name'            =>  'required|string|',
          'description'     =>  'required|string|',
          'picture'         =>  'required|string|',
          'stock'           =>  'required|integer|',
          'price'           =>  'required|numeric|'
    ];
}