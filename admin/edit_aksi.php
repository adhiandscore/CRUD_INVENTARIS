<?php

    //koneksi ke database
    include("../koneksi.php");

    //tangkap data yang dikirim dari form dengan metode POST
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $no_hp=$_POST['no_hp'];

    //update data dari database
    mysqli_query($koneksi,"update tbl_pendaftar set nama='$nama', username='$username', password='$password', email='$email', no_hp='$no_hp' where id='$id'");

    //alihkan kembali ke halaman daftar mapel
    header("location:index.php");
?>