<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminBaseModel extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'username', 'email', 'password', 'profil'];

    // Additional methods for retrieving, updating, and deleting data
}