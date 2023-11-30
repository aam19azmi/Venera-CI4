<?php 
    include "koneksi.php";

    if(isset($_POST['hapus_brg'])){
        $id = $_POST['id_brg'];

        $sql = "DELETE FROM produk WHERE id_brg = $id;";

        $hapus= mysqli_query($conn,$sql);
        if($hapus){
            echo "<script> console.log('Produk Berhasil Dihapus');
                document.location = 'admin_produk.php';
            </script>";
        }else{
            echo "<script> console.log('Produk Gagal Dihapus');
                document.location = 'admin_produk.php';
            </script>";
        }
    }
    if(isset($_POST['hapus_admin'])){
        $id = $_POST['id'];

        $sql2 = "DELETE FROM admins WHERE id = $id;";

        echo $id;

        $hapusadm = mysqli_query($conn,$sql2);
        if($hapusadm){
            echo "<script> console.log('Admin Berhasil Dihapus');
                document.location = 'admin_admin.php';
            </script>";
        }else{
            echo "<script> console.log('Admin Gagal Dihapus');
                document.location = 'admin_admin.php';
            </script>";
        }
    }

?>