<?php

    require "fungsi.php";

    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id=$id";

    $mhs = tampildata($query)[0];


    if(isset($_POST["kirim"]))
    {

        /// cek ubah data masuk atau tidak
        if(ubahdata($_POST, $id) > 0)
        {
            echo "<script>
                    alert('Data Berhasil Diubah!');
                    window.location.href='mahasiswa.php';
                 </script>
                 ";
        }
        else
        {
             echo "<script>
                    alert('Data Gagal Diubah!');
                    window.location.href='mahasiswa.php';
                 </script>
                 ";
        }

    }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h2>Ubah Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data" >
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="asma" required value="<?= $mhs["nama"] ?>" /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" id="nim" name="nim" required value="<?= $mhs["nim"] ?>" /></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="prodi" required value="<?= $mhs["jurusan"] ?>" /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email" value="<?= $mhs["email"] ?>" /></td>
            </tr>
            <tr>
                <td><label for="nohp">No. Hp</label></td>
                <td>:</td>
                <td><input type="number" id="nohp" name="no_hp" value="<?= $mhs["no_hp"] ?>" /></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="text" id="foto" name="foto" value="<?= $mhs["foto"] ?>" /></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="kirim">
                        Ubah
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <hr>
</body>
</html>