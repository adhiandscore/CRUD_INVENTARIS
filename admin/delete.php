<?php

    //koneksi dulu ke database pake include
    include("../koneksi.php");

    //menangkap data yang dikirim dari form dengan metode post
    $id=$_GET['id'];

    //delete data dari database
    mysqli_query($koneksi, "delete from tbl_pendaftar where id='$id'");

?>