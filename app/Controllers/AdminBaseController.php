<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminBaseModel;

class AdminBaseController extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        // Load the AdminBaseModel
        $this->adminModel = new AdminBaseModel();
    }

    public function index()
    {
        // Fetch all admins from the database
        $admins = $this->adminModel->findAll();

        // Pass the data to the view
        return view('admin_produk/admin_admin', ['admins' => $admins]);
    }

    public function create()
    {
        return view('admin_create');
    }

    public function store()
    {
        // Validation rules
        $validationRules = [
            'name' => 'required|min_length[3]',
            'username' => 'required|alpha_numeric|min_length[5]|is_unique[admins.username]',
            'email' => 'required|valid_email|is_unique[admins.email]',
            'password' => 'required',
            'profil' => 'uploaded[profil]|max_size[profil,1024]|is_image[profil]'
        ];

        // Run validation
        $validation = $this->validate($validationRules);

        if (!$validation) {
            // Redirect back with input and validation errors
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Handle file upload
        $profilFile = $this->request->getFile('profil');
        $newName = $profilFile->getRandomName();
        $profilFile->move('admin/assets/img/profil', $newName);

        // Insert data into the database
        $data = [
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'profil' => 'admin/assets/img/profil/' . $newName,
        ];

        try {
            // Save the data
            $this->adminModel->insert($data);
        } catch (\Exception $e) {
            // Handle database insertion error
            log_message('error', 'Error inserting admin: ' . $e->getMessage());
            return redirect()->to('/adminbase')->with('error', 'Error creating admin');
        }

        // Redirect to admin page with success message
        return redirect()->to('/adminbase')->with('success', 'Admin created successfully');
    }

    public function edit($id)
    {
        // Find the admin by ID
        $admin = $this->adminModel->find($id);

        // Pass the admin data to the view
        return view('admin_edit', ['admin' => $admin]);
    }

    public function update($id)
    {
        $admin = $this->adminModel->find($id);

        if (!$admin) {
            // Handle the case where the admin is not found
            return redirect()->to('/adminbase')->with('error', 'Admin not found');
        }

        $admin = (object)$admin; // Convert array to object

        // Find the admin by ID
        $admin = $this->adminModel->find($id);

        if (!$admin) {
            // Handle the case where the admin is not found
            return redirect()->to('/adminbase')->with('error', 'Admin not found');
        }

        // Validation rules
        $validationRules = [
            'name' => 'required|min_length[3]',
            'username' => "required|alpha_numeric|min_length[5]|is_unique[admins.username,username,{$admin->id}]",
            'email' => "required|valid_email|is_unique[admins.email,email,{$admin->id}]",
            'password' => 'required',
            'profil' => 'max_size[profil,1024]|is_image[profil]'
        ];

        // Run validation
        $validation = $this->validate($validationRules);

        if (!$validation) {
            // Redirect back with input and validation errors
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Update admin data
        $admin->name = $this->request->getPost('name');
        $admin->username = $this->request->getPost('username');
        $admin->email = $this->request->getPost('email');

        // Check if a new password is provided
        $newPassword = $this->request->getPost('password');
        if (!empty($newPassword)) {
            // Hash and set the new password
            $admin->password = password_hash($newPassword, PASSWORD_DEFAULT);
        }

        // Handle file upload only if a new image is provided
        if ($profilFile = $this->request->getFile('profil')) {
            // Delete the old image if it exists
            if (file_exists($admin->profil)) {
                unlink($admin->profil);
            }

            // Move the new image
            $newName = $profilFile->getRandomName();
            $profilFile->move('admin/assets/img/profil', $newName);
            $admin->profil = 'admin/assets/img/profil/' . $newName;
        }

        // Save the updated data
        $this->adminModel->save($admin);

        // Redirect to admin page with success message
        return redirect()->to('/adminbase')->with('success', 'Admin updated successfully');
    }

    public function delete($id)
    {
        // Delete the record from the database
        $this->adminModel->delete($id);

        // Redirect to admin page with success message
        return redirect()->to('/adminbase')->with('success', 'Admin deleted successfully');
    }
}