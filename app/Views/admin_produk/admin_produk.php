<?php
// Load the Product model
use App\Models\Product;

// Create an instance of the Product model
$productModel = new Product();

// Fetch all products from the database
$products = $productModel->findAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Link buat Emote Bootstrap -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/admin/admin.css" />
    <title>Produk | Admin</title>
</head>

<body>
    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-4 text-bg-dark bg-dark shadow" id="sidebar" style="width: 280px">
            <a href="/" class="d-flex mb-3 mb-md-0 me-md-auto text-white text-decoration-none ms-4">
                <img src="assets/img/logo/logo-putih.png" class="logo" />
                <h1 class="fs-2 ps-2">Venera</h1>
            </a>
            <hr />
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="<?= base_url('/adminhome') ?>" class="nav-link text-white d-flex align-items-center gap-2"
                        aria-current="page" id="dashboard">
                        <i class="bi bi-columns"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('/adminbase') ?>" class="nav-link text-white d-flex align-items-center gap-2"
                        id="admin">
                        <i class="bi bi-person-circle"></i>
                        Admin
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('/admin/produk') ?>"
                        class="nav-link text-white d-flex align-items-center gap-2 active" id="produk">
                        <i class="bi bi-shop"></i>
                        Produk
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-flex flex-column" style="width: 100%; height: 100vh; background-image: url(assets/img/background/bg2.jpg); background-repeat: no-repeat;
          background-size: cover;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
                <div class="container-fluid">
                    <a class="navbar-brand text-white ps-5 fs-2" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="dropdown pe-5">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/profil/profil.jpg" alt="" width="32" height="32"
                                class="rounded-circle me-2" />
                            <strong class="fs-4">Admin 1</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Isi Konten -->

            <div class="container d-flex pt-3" style="height: 90vh; width: 100%">
                <div class="row justify-content-center">
                    <div class="col-md-20">
                        <div class="card" style="width: 100%">
                            <div class="card-header bg-dark text-white">Tabel Barang</div>
                            <div class="card-body bg-secondary text-white">
                                <!-- Modal Tambah Barang -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                    data-bs-target="#ModalTambahBarang">
                                    Tambah Barang
                                </button>

                                <!-- Modal -->
                                <div class="modal fade text-dark" id="ModalTambahBarang" tabindex="-1"
                                    aria-labelledby="ModalTambahBarangLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" id="ModalTambahBarangLabel">
                                                    Tambah Barang
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" enctype="multipart/form-data"
                                                action="<?= site_url('/admin/produk/store') ?>">
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="nama_barang" class="form-label">Nama Barang</label>
                                                        <input type="text" class="form-control" id="nama_barang"
                                                            name="nama_barang" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="deskripsi" class="form-label">Deskripsi
                                                            Barang</label>
                                                        <textarea class="form-control" id="deskripsi" rows="3"
                                                            name="deskripsi"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="gambar" class="form-label">Gambar Barang</label>
                                                        <input type="file" class="form-control-file" id="gambar"
                                                            name="gambar" accept="image/*" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="stok" class="form-label">Stok Barang</label>
                                                        <input type="text" class="form-control" id="stok" name="stok" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="harga" class="form-label">Harga Barang</label>
                                                        <input type="text" class="form-control" id="harga"
                                                            name="harga" />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Kembali
                                                    </button>
                                                    <button type="submit" name="tambah" class="btn btn-primary">
                                                        Tambah Barang
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Akhir Modal Tambah Barang -->
                                <!-- Tabel Barang -->
                                <table
                                    class="table table-bordered table-dark table-hover align-items-center pt-3 text-white">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col" class="col-1">No</th>
                                            <th scope="col" class="col-1">Id Barang</th>
                                            <th scope="col" class="col-1">Nama Barang</th>
                                            <th scope="col" class="col-3">Deskripsi Barang</th>
                                            <th scope="col" class="col-2">Gambar Barang</th>
                                            <th scope="col" class="col-1">Stok Barang</th>
                                            <th scope="col" class="col-1">Harga Barang</th>
                                            <th scope="col" class="col-1">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                          foreach ($products as $index => $data)  :
                                        ?>
                                        <tr class="table-secondary">
                                            <th scope="row" class="text-center"><?= $index + 1; ?></th>
                                            <td class="text-center"> <?= $data['id']; ?> </td>
                                            <td> <?= $data['name']; ?> </td>
                                            <td> <?= $data['description']; ?> </td>
                                            <td><img src="<?= base_url('/assets/img/produk/'.$data['picture']) ?>"
                                                    width="auto" height="auto" alt="<? $data['picture'] ?>" />
                                            </td>
                                            <td><?= $data['stock']; ?></td>
                                            <td><?= $data['price']; ?></td>
                                            <td>
                                                <div style="width: 100%">
                                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#ModalEditBarang<?= $index ?>">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>

                                                    <button class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#ModalHapusBarang<?= $index ?>">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>

                                                <!-- Modal Edit Barang -->
                                                <div class="modal fade text-dark" id="ModalEditBarang<?= $index ?>"
                                                    tabindex="-1" aria-labelledby="ModalEditBarangLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-dark"
                                                                    id="ModalEditBarangLabel">
                                                                    Edit Barang
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form method="POST"
                                                                action="<?= site_url('/admin/produk/update/' . $data['id']) ?>"
                                                                enctype="multipart/form-data">
                                                                <input type="hidden" name="id"
                                                                    value="<?= $data['id']?>">
                                                                <input type="hidden" name="gambar_barang"
                                                                    value="<?= $data['picture']?>">
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="nama_barang" class="form-label">Nama
                                                                            Barang</label>
                                                                        <input type="text" class="form-control"
                                                                            id="nama_barang" name="nama_barang"
                                                                            value="<?= $data['name']?>" />
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="deskripsi"
                                                                            class="form-label">Deskripsi Barang</label>
                                                                        <textarea class="form-control" id="deskripsi"
                                                                            name="deskripsi"
                                                                            rows="3"><?= $data['description']?></textarea>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="gambar" class="form-label">Gambar
                                                                            Barang</label>
                                                                        <input type="file" class="form-control-file"
                                                                            id="gambar" name="gambar" />
                                                                        <p>File Saat Ini: <?= $data['picture']?></p>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="stok" class="form-label">Stok
                                                                            Barang</label>
                                                                        <input type="text" class="form-control"
                                                                            name="stok" id="stok"
                                                                            value="<?= $data['stock']?>" />
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="harga" class="form-label">Harga
                                                                            Barang</label>
                                                                        <input type="text" class="form-control"
                                                                            name="harga" id="harga"
                                                                            value="<?= $data['price']?>" />
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Kembali</button>
                                                                    <button type="submit" class="btn btn-primary"
                                                                        name="edit_brg">
                                                                        Simpan
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Akhir Edit Barang -->
                                                <!-- Modal Hapus Barang -->
                                                <div class="modal fade text-dark" id="ModalHapusBarang<?= $index ?>"
                                                    tabindex="-1" aria-labelledby="ModalHapusLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalHapusLabel">
                                                                    Hapus Barang
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form
                                                                action="<?= site_url('/admin/produk/delete/' . $data['id']) ?>"
                                                                method="POST">
                                                                <input type="hidden" name="id_brg"
                                                                    value="<?= $data['id']?>">
                                                                <div class="modal-body">
                                                                    Hapus Barang dengan id <span
                                                                        class="text-danger"><?= $data['id']; ?></span>
                                                                    dan nama barang
                                                                    <span
                                                                        class="text-danger"><?= $data['name']; ?></span>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Kembali
                                                                    </button>
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <button type="submit" class="btn btn-danger"
                                                                        name="hapus_brg">Yakin</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Akhir Modal Hapus Barang -->

                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- Akhir Tabel Barang -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Isi Konten -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="assets/js/admin/admin.js"></script>
</body>

</html>