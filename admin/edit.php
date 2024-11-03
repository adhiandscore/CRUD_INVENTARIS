<html>
    <head>
        <title>
            Ubah pengguna
        </title>
    </head>

    <body>
        <a href="index.php">Home</a>
        <br>
        <br>

        <?php
            include '../koneksi.php';
            $id=$_GET['id'];
            $data=mysqli_query($koneksi, "SELECT * FROM tbl_pendaftar WHERE id='$id'");
        
            while($d=mysqli_fetch_array($data)) 
                {
            ?>  

                <form action="edit_aksi.php" method="post" name="formedit">
                    <table width="25%" border="0">
                        <tr>
                            <td> id pendaftar </td>
                            <td> <input type="text" name="id" value="<?php echo $d['id'] ?>" readonly></td>
                        </tr>
                        <tr>
                            <td> Nama </td>
                            <td> <input type="text" name="nama" value="<?php echo $d['nama'] ?>" ></td>
                        </tr>
                        <tr>
                            <td> Username </td>
                            <td> <input type="text" name="username" value="<?php echo $d['username'] ?>" ></td>
                        </tr>
                        <tr>
                            <td> Password </td>
                            <td> <input type="text" name="password" value="<?php echo $d['password'] ?>" ></td>
                        </tr>
                        <tr>
                            <td> email </td>
                            <td> <input type="text" name="email" value="<?php echo $d['email'] ?>" ></td>
                        </tr>
                        <tr>
                            <td> no hp </td>
                            <td> <input type="text" name="no_hp" value="<?php echo $d['email'] ?>" ></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td> <input type="submit" name="submit" value="edit"></td>
                        </tr>

                    </table>
                </form>

            <?php

            }
        ?>
    </body>
</html>