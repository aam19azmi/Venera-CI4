<?php 
    include "koneksi.php";

    if(isset($_POST['edit_brg'])){
        $id = $_POST['id_brg'];
        $nama = $_POST['nama_barang'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $gambar_saat_ini = $_POST['gmbr_brg'];

        //upload gambar 
        $uploadOk = 1;
        $target_dir = "assets/img/produk/";
        $gambar = $_FILES['gambar']['name'];
        //Periksa Apakah gambar diganti atau tidak
        if($gambar_saat_ini == $gambar || $gambar == ""){
            echo "file tidak diganti";
            $gambar = $gambar_saat_ini;
            $uploadOk = 0;
        }else{
            // Periksa apakah file gambar valid
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check === false) {
                echo "File bukan gambar.";
                $uploadOk = 0;
            }
        }
        $gambar2 = $target_dir.basename($gambar);
        $imageFileType = strtolower(pathinfo($gambar2, PATHINFO_EXTENSION));

        

        // Periksa apakah file sudah ada
        if (file_exists($gambar2)) {
            echo "gambar sudah ada";
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


        $sql = "UPDATE produk SET nm_brg='$nama',deskripsi='$deskripsi', gambar_brg='$gambar', stok=$stok, harga=$harga WHERE id_brg = $id;";

        $edit= mysqli_query($conn,$sql);
        if($edit){
            echo "<script> console.log('Produk Berhasil Dihapus');
            document.location = 'admin_produk.php';
            </script>";
        }else{
            echo "<script> console.log('Produk Gagal Dihapus');
                document.location = 'admin_produk.php';
            </script>";
        }
    }

    if(isset($_POST['edit_admin'])){
        $id = $_POST['id'];
        $nama = $_POST['name'];
        $username= $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $profil_saat_ini = $_POST['profil_now'];

        //upload gambar 
        $uploadOk = 1;
        $target_dir = "assets/img/profil/";
        $profil = $_FILES['profil']['name'];
        //Periksa Apakah gambar diganti atau tidak
        if($profil_saat_ini == $profil || $profil== ""){
            echo "file tidak diganti";
            $profil = $profil_saat_ini;
            $uploadOk = 0;
        }else{
            $check = getimagesize($_FILES["profil"]["tmp_name"]);
            if ($check === false) {
                echo "File bukan gambar.";
                $uploadOk = 0;
            }
        }
        $gambar2 = $target_dir.basename($profil);
        $imageFileType = strtolower(pathinfo($gambar2, PATHINFO_EXTENSION));

        // Periksa apakah file gambar valid
        
        // Periksa apakah file sudah ada
        if (file_exists($gambar2)) {
            echo "gambar sudah ada";
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
            if (move_uploaded_file($_FILES["profil"]["tmp_name"], $gambar2)) {
                echo "File " . htmlspecialchars(basename($_FILES["profil"]["name"])) . " berhasil diunggah.";
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file.";
            }
        }


        $sql = "UPDATE admins SET name='$nama',username='$username', email='$email', password='$password', profil='$profil' WHERE id = $id;";

        $edit= mysqli_query($conn,$sql);
        if($edit){
            echo "<script> console.log('Admin Berhasil DiEdit');
            document.location = 'admin_admin.php';
            </script>";
        }else{
            echo "<script> console.log('Admin Gagal DiEdit');
                document.location = 'admin_admin.php';
            </script>";
        }
    }

?>