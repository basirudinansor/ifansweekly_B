<?php
    
$koneksi = mysqli_connect("localhost", "root", "", "answeekly-ifb");


function tampildata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);

    $rows = [];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }

    return $rows;
}


function tambahdata($data, $files)
{
    global $koneksi;
    $nama = htmlspecialchars($data["asma"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["prodi"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["no_hp"]);

    $namafoto = $files["name"];
    $tmpfoto = $files["tmp_name"];
    $date = date('dmY_His');
    $newnamefoto = $date.$namafoto;

    $path = "assets/images/$newnamefoto";

    if(move_uploaded_file($tmpfoto, $path))
    {

    $query = "INSERT INTO mahasiswa 
        (nama,nim,jurusan,email,no_hp,foto) VALUES 
        ('$nama', '$nim', '$jurusan', '$email', '$nohp', '$newnamefoto')";
    
    mysqli_query($koneksi,$query);

    }
    return mysqli_affected_rows($koneksi);

}


function hapusdata($id)
{
    global $koneksi;

    $query = "DELETE FROM mahasiswa WHERE id=$id";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);

}

function ubahdata($data, $id)
{
    global $koneksi;

    $nama = htmlspecialchars($data["asma"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["prodi"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["no_hp"]);
    $foto = $data["foto"];

    $query = "UPDATE mahasiswa SET 
                nama = '$nama',
                nim = '$nim',
                jurusan = '$jurusan',
                email = '$email',
                no_hp = '$nohp',
                foto = '$foto'
              WHERE id=$id
                ";
    
    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);

}

?>