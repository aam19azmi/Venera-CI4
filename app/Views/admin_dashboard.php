<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Link buat Emote Bootstrap -->
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="assets/css/admin/admin.css" />
    <title>Dashboard | Admin</title>
  </head>
  <body>
    <div class="d-flex">
      <div
        class="d-flex flex-column flex-shrink-0 p-4 text-bg-dark bg-dark shadow"
        id="sidebar"
        style="width: 280px"
      >
        <a
          href="/"
          class="d-flex mb-3 mb-md-0 me-md-auto text-white text-decoration-none ms-4"
        >
          <img src="assets/img/logo/logo-putih.png" class="logo" />
          <h1 class="fs-2 ps-2">Venera</h1>
        </a>
        <hr />
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a
              href="<?php echo site_url('/')?>"
              class="nav-link text-white d-flex align-items-center gap-2 active"
              aria-current="page"
              id="dashboard"
            >
              <i class="bi bi-columns"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a
              href="<?php echo site_url('/admin/admin')?>"
              class="nav-link text-white d-flex align-items-center gap-2"
              id="admin"
            >
              <i class="bi bi-person-circle"></i>
              Admin
            </a>
          </li>
          <li>
            <a
              href="<?php echo site_url('/admin/produk')?>"
              class="nav-link text-white d-flex align-items-center gap-2"
              id="produk"
            >
              <i class="bi bi-shop"></i>
              Produk
            </a>
          </li>
        </ul>
      </div>

      <div
        class="d-flex flex-column"
        style="
          width: 100%;
          height: 100vh;
          background-image: url(assets/img/background/bg2.jpg);
          background-repeat: no-repeat;
          background-size: cover;
        "
      >
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow">
          <div class="container-fluid">
            <a class="navbar-brand text-white ps-5 fs-2" href="#">Dashboard</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown pe-5">
              <a
                href="#"
                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="assets/img/profil/profil.jpg"
                  alt=""
                  width="32"
                  height="32"
                  class="rounded-circle me-2"
                />
                <strong class="fs-4">Admin 1</strong>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#">Log out</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container d-flex pt-3" style="height: 90vh; width: 100%">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header bg-dark text-white">Admin 1</div>
                <div class="card-body bg-secondary text-white">
                  Kamu sudah Login
                  <br /><br />
                  Ini Halaman Dashboard
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="assets/js/admin/admin.js"></script>
  </body>
</html>
