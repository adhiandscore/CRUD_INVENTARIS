<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistem Informasi PPDB </title>
</head>
<body>
    
    <h2>
        <center>
            Sistem Informasi PPLG
        </center>
    </h2>

    <?php

        if(isset($_GET['pesan']))
        {
            if($_GET['pesan']=='gagal')
            {
                echo "Gagal Login, entah username atau passwordnya kurang sesuai";
            }
            else 
            if($_GET["pesan"]== "logout")
            {
                echo "anda sudah logout";
            }
            if($_GET['pesan'] == 'belum_login')
            {
                echo "jika ingin akses admin, login dulu";
            }
        }
    ?>

    <form method="post" action="login_aksi.php">
        <table align="center">
            <tr>
                <td>
                    Username
                </td>
                
                <td>
                    <input type="text" name="nama" placeholder="Masukan Username">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                
                <td>
                    <input  name="password" type="password" placeholder="Masukan Password">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="LOGIN">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>