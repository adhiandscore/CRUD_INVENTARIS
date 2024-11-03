<?php

    //mulai sesi
    session_start();

    
    //konek database
    include '../koneksi.php';

    //cek ketika submit, insert form data ke tabel pendaftar
    if(isset($_POST['Submit']))
    {
        $nama=$_POST['nama'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $no_hp=$_POST['no_hp'];
    }

?>