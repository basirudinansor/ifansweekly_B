<?php

    require "fungsi.php";

    if(isset($_POST["kirim"]))
    {

        /// cek tambah data masuk atau tidak
        if(tambahdata($_POST) > 0)
        {
            echo "<script>
                    alert('Data Berhasil Ditambahkan!');
                    window.location.href='mahasiswa.php';
                 </script>
                 ";
        }
        else
        {
             echo "<script>
                    alert('Data Gagal Ditambahkan!');
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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data" >
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="asma" required /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" id="nim" name="nim" required /></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="prodi" required /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email" /></td>
            </tr>
            <tr>
                <td><label for="nohp">No. Hp</label></td>
                <td>:</td>
                <td><input type="number" id="nohp" name="no_hp" /></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="text" id="foto" name="foto" /></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="kirim">
                        Tambah
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <hr>
</body>
</html>