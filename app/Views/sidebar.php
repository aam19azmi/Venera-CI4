<!-- sidebar.php -->
<div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-4 text-bg-dark bg-dark shadow" id="sidebar" style="width: 280px">
        <a href="/" class="d-flex mb-3 mb-md-0 me-md-auto text-white text-decoration-none ms-4">
            <img src="<?= base_url('assets/img/logo/logo-putih.png'); ?>" class="logo" />
            <h1 class="fs-2 ps-2">Venera</h1>
        </a>
        <hr />
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="<?= base_url('/adminhome'); ?>" class="nav-link text-white d-flex align-items-center gap-2"
                    aria-current="page" id="dashboard">
                    <i class="bi bi-columns"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="<?base_url('/adminbase')?>" class="nav-link text-white d-flex align-items-center gap-2 active"
                    id="admin">
                    <i class="bi bi-person-circle"></i>
                    Admin
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/produk'); ?>" class="nav-link text-white d-flex align-items-center gap-2"
                    id="produk">
                    <i class="bi bi-shop"></i>
                    Produk
                </a>
            </li>
        </ul>
    </div>

    <div class="d-flex flex-column"
        style="width: 100%; height: 100vh; background-image: url(<?= base_url('assets/img/background/bg2.jpg'); ?>); background-repeat: no-repeat;">
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
                        <img src="<?= base_url('assets/img/profil/profil.jpg'); ?>" alt="" width="32" height="32"
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