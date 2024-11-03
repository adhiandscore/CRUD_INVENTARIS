<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    
        //mulai session
        session_start();

        //koneksi ke database
        include "koneksi.php";

        //ambil data dari form login
        $username=$_POST['nama'];
        $password=$_POST['password'];

        //perintah query
        $data = mysqli_query($koneksi, "SELECT * FROM tbl_pendaftar WHERE username='$username' and password='$password'");

        //cek data
        $cek = mysqli_num_rows($data);

        if($cek> 0){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
            header("location:admin/index.php");
                        
        }
        else {
            header("location:admin/index.php?pesan=gagal");
        }
    ?>
</body>
</html>