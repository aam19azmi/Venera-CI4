<?php 
    include "koneksi.php";

    if(isset($_POST['tambah'])){
        $nama = $_POST['nama_barang'];
        $deskripsi = $_POST['deskripsi'];

        //upload gambar 
        $target_dir = "assets/img/produk/";
        $gambar = $_FILES['gambar']['name'];
        $gambar3 = basename($gambar);
        $gambar2 = $target_dir.basename($gambar);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($gambar2, PATHINFO_EXTENSION));

        // Periksa apakah file gambar valid
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($check === false) {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }

        // Periksa apakah file sudah ada
        if (file_exists($gambar2)) {
            echo "<script> alert('Maaf nama file sudah ada, coba ganti nama filenya melalui tombol edit, sementara akan menggunakan file yang sudah ada');
                document.location = 'admin_produk.php';
            </script>";
            $uploadOk = 0;
        }

        // Batasi jenis file yang diizinkan
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Maaf, hanya file JPG, JPEG, PNG, dan GIF yang diizinkan.";
            $uploadOk = 0;
        }

        // Periksa apakah $uploadOk diatur ke 0 oleh kesalahan
        if ($uploadOk == 0) {
            echo "Maaf, file tidak diunggah.";
        } else {
            // Jika semuanya oke, coba unggah file
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar2)) {
                echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diunggah.";
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file.";
            }
        }

        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        $sql = "INSERT INTO produk (id_brg, nm_brg, deskripsi, gambar_brg, stok, harga) VALUES ('','$nama','$deskripsi','$gambar',$stok,$harga)";
        $simpan = mysqli_query($conn,$sql);

        if($simpan){
            echo "<script> console.log('Produk Berhasil Ditambahkan');
                document.location = 'admin_produk.php';
            </script>";
        }else{
            echo "<script> console.log('Produk Gagal Ditambahkan');
                document.location = 'admin_produk.php';
            </script>";
        }
    }

    if(isset($_POST['add_admin'])){
        $nama = $_POST['name'];
        $user = $_POST['username'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];

        //upload gambar 
        $target_dir = "assets/img/profil/";
        $profil = $_FILES['profil']['name'];
        $gambar = $target_dir.basename($profil);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));

        // Periksa apakah file gambar valid
        $check = getimagesize($_FILES["profil"]["tmp_name"]);
        if ($check === false) {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }

        // Periksa apakah file sudah ada
        if (file_exists($gambar)) {
            echo "<script> alert('Maaf nama file sudah ada, coba ganti nama filenya melalui tombol edit, sementara akan menggunakan file yang sudah ada');
                document.location = 'admin_admin.php';
            </script>";
            $uploadOk = 0;
        }

        // Batasi jenis file yang diizinkan
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Maaf, hanya file JPG, JPEG, PNG, dan GIF yang diizinkan.";
            $uploadOk = 0;
        }

        // Periksa apakah $uploadOk diatur ke 0 oleh kesalahan
        if ($uploadOk == 0) {
            echo "Maaf, file tidak diunggah.";
        } else {
            // Jika semuanya oke, coba unggah file
            if (move_uploaded_file($_FILES["profil"]["tmp_name"], $gambar)) {
                echo "File " . htmlspecialchars(basename($_FILES["profil"]["name"])) . " berhasil diunggah.";
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file.";
            }
        }

        $sql2 = "INSERT INTO admins (id, name, username, email, password, profil) VALUES ('','$nama','$user','$email','$pass','$profil')";
        $tambah = mysqli_query($conn,$sql2);

        if($tambah){
            echo "<script> console.log('Admin Berhasil Ditambahkan');
                document.location = 'admin_admin.php';
            </script>";
        }else{
            echo "<script> console.log('Admin Gagal Ditambahkan');
                document.location = 'admin_adminphp';
            </script>";
        }
    }

?>