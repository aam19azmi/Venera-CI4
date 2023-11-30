<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;
use CodeIgniter\HTTP\Request;

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new Product();
        $data['products'] = $productModel->findAll();

        return view('admin_produk/admin_produk', $data);
    }

    public function create()
    {
        return view('admin_produk/tambah_barang');
    }

    public function store()
    {
        $productModel = new Product();

        // Handle image upload
        $picture = $this->request->getFile('gambar');
        $newPictureName = $picture->getRandomName();
        $picture->move(ROOTPATH . 'public/assets/img/produk/', $newPictureName);

        $data = [
            'name' => $this->request->getPost('nama_barang'),
            'description' => $this->request->getPost('deskripsi'),
            'picture' => $newPictureName,
            'stock' => $this->request->getPost('stok'),
            'price' => $this->request->getPost('harga')
        ];

        $productModel->insert($data);

        return redirect()->to('/admin/produk');
    }
    public function edit($id)
    {
        $productModel = new Product();
        $data['product'] = $productModel->find($id);

        return view('admin_produk/edit_barang', $data);
    }

    public function update($id)
{
    $productModel = new Product();

    // Get the existing product data
    $existingProduct = $productModel->find($id);

    // Get the existing picture name
    $existingPicture = $existingProduct['picture'];

    // Handle image upload if a new file is selected
    $picture = $this->request->getFile('gambar');
    if ($picture->isValid() && !$picture->hasMoved()) {
        // Move the new image
        $newPictureName = $picture->getRandomName();
        $picture->move(ROOTPATH . 'public/assets/img/produk/', $newPictureName);

        // Delete the existing image
        if ($existingPicture && file_exists(ROOTPATH . 'public/assets/img/produk/' . $existingPicture)) {
            unlink(ROOTPATH . 'public/assets/img/produk/' . $existingPicture);
        }
    } else {
        // If no new file is selected, use the existing picture name
        $newPictureName = $existingPicture;
    }

    // Update the product data
    $data = [
        'name' => $this->request->getPost('nama_barang'),
        'description' => $this->request->getPost('deskripsi'),
        'picture' => $newPictureName,
        'stock' => $this->request->getPost('stok'),
        'price' => $this->request->getPost('harga')
    ];

    $productModel->update($id, $data);

    return redirect()->to('/admin/produk');
}


    public function delete($id)
{
    $productModel = new Product();
    
    // Get the existing picture name
    $existingPicture = $productModel->find($id)['picture'];
    
    // Delete the existing image from the 'uploads' folder
    if ($existingPicture && file_exists(ROOTPATH . 'public/assets/img/produk/' . $existingPicture)) {
        unlink(ROOTPATH . 'public/assets/img/produk/' . $existingPicture);
    }

    // Delete the product from the database
    $productModel->delete($id);

    return redirect()->to('/admin/produk');
}

}