<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use CodeIgniter\HTTP\Request;

class AdminController extends BaseController
{
    var $sess;
    public function __construct()
    {
        //this fix
        $this->sess = session();
    }

    public function loginHandler()
    {
        // Login page
        $data['title'] = 'Login page';
        $data['titleBox'] = 'Login';
        return view("auth", $data);
    }

    public function registerHandler()
    {
        // Register page
        $data['title'] = 'Register page';
        $data['titleBox'] = 'Register';

        return view("register", $data);
        
    }

    public function saveRegisterHandler()
    {
        // Register page
        $data['title'] = 'Register page';
        $data['titleBox'] = 'Register';

        $adminModel = new AdminModel();

        if ($this->validate($adminModel->rules)) {
            $adminData = $this->request->getPost();
            $result = $adminModel->addAdmin($adminData);
            $this->sess->setFlashdata('admins', $adminModel->getLatest());
            return redirect()->to('/');
        } else {
            $data['validation'] = $this->validator;
            return view("register", $data);
        }
    }

    public function loginAdmin()
    {
        $data['title'] = 'Register page';
        $data['titleBox'] = 'Register';

        $adminModel = new AdminModel();
        
        if ($this->validate($adminModel->loginRules)) {
            # code...
            $result = $adminModel->login(
                $this->request->getPost("username"),
                $this->request->getPost("password")
            );
            if ($result) {
                # code...
                $this->sess->setFlashdata('admins', $adminModel->getLatest());
                return redirect()->to('/');
            } else {
                # code...
                return redirect()->to('/login');
            }
            
        } else {
            # code...
            $data['validation'] = $this->validator;
            return view('/login', $data);
        }
        
    }

    public function dasboard() 
    {
        $adminModel = new AdminModel();
        $this->sess->setFlashdata('admins', $adminModel->getLatest());
        return view('admin_admin');
    }
    public function index() 
    {
        return view('admin_dashboard');
    }

}
