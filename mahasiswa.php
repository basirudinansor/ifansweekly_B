<?php

    require "fungsi.php";
    $qmahasiswa = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmahasiswa);  /// array isinya data mahasiswa 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Informatika 2026</title>
</head>
<body>
    <h1>INFORMATIKA 2026</h1>
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
            <td><a href="register.php">Register</a></td>
        </tr>
    </table>
    <br>
    <hr/>
    <h2>Data Mahasiswa</h2>
    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>
    <table border="1" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th> 
            <th>Email</th>
            <th>No. HP</th>   
            <th>Foto</th>   
            <th>Aksi</th>     
        </tr> 
        <?php 
            $i = 1;
            foreach($mahasiswas as $mhs) //// array mahasiswa data mhs
            {
        ?>   
        <tr>
            <td align="center"><?= $i ?></td>
            <td><?= $mhs["nama"] ?></td>
            <td><?= $mhs["nim"] ?></td>
            <td><?= $mhs["jurusan"] ?></td>
            <td><?= $mhs["email"] ?></td>
            <td><?= $mhs["no_hp"] ?></td>
            <td><img src="assets/images/<?= $mhs["foto"] ?>" alt="foto" width="60px"></td>  
            <td>
                <a href="ubahdata.php?id=<?= $mhs["id"] ?>"><button>Edit</button></a> | 
                <a href="hapusdata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Yaqueeeenn??')";  ><button>Hapus</button></a>
            </td>          
        </tr>
        <?php 
            $i++;
            }
        ?>
    </table>
    <br>
    <hr>
</body>
</html>