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


function tambahdata($data)
{
    global $koneksi;
    $nama = htmlspecialchars($data["asma"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["prodi"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["no_hp"]);
    $foto = $data["foto"];

    $query = "INSERT INTO mahasiswa 
        (nama,nim,jurusan,email,no_hp,foto) VALUES 
        ('$nama', '$nim', '$jurusan', '$email', '$nohp', '$foto')";
    
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);

}


function hapusdata($id)
{
    global $koneksi;

    $query = "DELETE FROM mahasiswa WHERE id=$id";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);

}

?>