<?php

// koneksi ke database menggunakan mysqli 

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'ppdb';

    // $koneksi = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

    // if (mysqli_connect_errno()) {
    //     echo "Sukses koneksi";
    // }
    // else {
    //     "Gagal koneksi";
    // }

    try {

        $pdo = new PDO("mysql:host=localhost;dbName=ppdb","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print "Koneksi berhasli";
    }
    catch (PDOException $e){
        print"error" . $e -> getMessage();
    }
?>