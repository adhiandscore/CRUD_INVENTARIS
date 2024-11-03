<?php

    // //mulai sesi
    // session_start();

    // //cek sesi
    // if($_SESSION['status']!="login")
    // {
    //     header("location:../index.php?pesan=belum_login");
    // }

    //koneksi ke database
    include"../koneksi.php";

    //fetch semua data user dari database
    $result = mysqli_query($koneksi, "SELECT * FROM tbl_pendaftar ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Homepage </title>
</head>
<body>
    
    <h2> Selamat Datang <?php echo $_SESSION['username']; ?> di halaman Admin Bro!</h2>

    <a href="tambah.php"> Tambah pengguna baru </a>

    <table width="80%" border=1>

        <tr>
            <th>
                No
            </th>

            <th>
                Nama Lengkap
            </th>

            <th>
                Username
            </th>

            <th>
                Password
            </th>

            <th>
                email
            </th>
            <th>
                no Hp
            </th>
        </tr>

        <?php
            while ($user_data = mysqli_fetch_array($result))
            {
                echo "<tr>";
                    echo "<td>" . $user_data['id']. "</td>";
                    echo "<td>" . $user_data['nama']. "</td>";
                    echo "<td>" . $user_data['username']. "</td>";
                    echo "<td>" . $user_data['password']. "</td>";
                    echo "<td>" . $user_data['email']. "</td>";
                    echo "<td>" . $user_data['no_hp']. "</td>";
                    echo "<td> <a href='edit.php?id=$user_data[id]'> Edit </a> | <a href='delete.php?id=$user_data[id]'> Delete </a></td></tr>";
            }
        ?>

    </table>

    <a href="logout.php"> Logout </a>
                
    </body>
</html>