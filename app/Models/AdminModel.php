<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    // Table to use
    protected $table            = 'admins';

    // Fillable columns
    protected $allowedFields = array('id', 'name', 'username', 'email', 'password');
    
    protected $returnType = \App\Entities\Admin::class;

    public $rules = [
        'name' => 'required|min_length[3]',
        'username' => 'required|alpha_numeric|min_length[5]|is_unique[admins.username]',
        'email' => 'required|valid_email|is_unique[admins.email]',
        'password' => 'required',
        'confirmPassword' => 'required|matches[password]'
    ];

    public $loginRules = [
        'username' => 'required',
        'password' => 'required'
    ];

    public function addAdmin($data)
    {
        $admin = new \App\Entities\Admin();

        $admin->name = $data['name'];
        $admin->username = $data['username'];
        $admin->email = $data['email'];
        $admin->password = $data['password'];

        $this->save($admin);
        return [$admin->name, $this->getInsertID()];
    }

    public function login($username, $password)
    {
        $admin = $this->where('username', $username)->first();
        if ($admin && password_verify($password, $admin->password)) {
            # code...
            return [$admin->username, $admin->id];
        } else {
            # code...
            return false;
        }
        
    }
}
