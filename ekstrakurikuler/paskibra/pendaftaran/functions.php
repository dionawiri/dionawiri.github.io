<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</html>

<?php 
require 'koneksi.php';

function query($query) {
    global $conn_ekstra;
    $result = mysqli_query($conn_ekstra, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// pendaftaran
function pendaftaran($data) {

    global $conn_ekstra;
    $nama = htmlspecialchars($data["nama"]);
    $nama = htmlspecialchars($data["nis"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kelamin = htmlspecialchars($data["kelamin"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $tlp = htmlspecialchars($data["tlp"]);
    $email = htmlspecialchars($data["email"]);

 
   
}

// berita
function berita($data) {

    global $conn_berita;
    $judul_berita = htmlspecialchars($data["judul_berita"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $isi_berita = htmlspecialchars($data["isi_berita"]);
    $gambar = htmlspecialchars($data["gambar"]);
   
}


function hapus() {
    global $conn_ekstra;
    mysqli_query($conn_ekstra, "DELETE  FROM data_paskib
    WHERE id = '".$_GET['id']."' ");

    return mysqli_affected_rows($conn_ekstra);
}
 
	



function ubah($data) {
 global $conn_ekstra;
 
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kelamin = htmlspecialchars($data["kelamin"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $tlp = htmlspecialchars($data["tlp"]);
    $email = htmlspecialchars($data["email"]);

    // query insert data
    $query = "UPDATE data_paskib SET
                nama = '$nama',
                kelas = '$kelas',
                alamat = '$alamat',
                kelamin = '$kelamin',
                tgl_lahir = '$tgl_lahir',
                tlp = '$tlp',
                email = '$email'
                WHERE id = '".$_GET['id']."'
                ";

    mysqli_query($conn_ekstra, $query);

    return mysqli_affected_rows($conn_ekstra);
}


function cari($keyword){
    $query = "SELECT * FROM data_paskib
            WHERE
                nama LIKE '%$keyword%' OR
                nis LIKE '%$keyword%' OR
                kelas LIKE '%$keyword%' OR
                alamat LIKE '%$keyword%' OR
                kelamin LIKE '%$keyword%' OR
                tgl_lahir LIKE '%$keyword%' OR
                tlp LIKE '%$keyword%' OR
                email LIKE '%$keyword%'
            ";

    return query($query);
}

function konfirmasi($konfirmasi) {
    $query = "SELECT * FROM data_paskib WHERE nis = '$konfirmasi'
    ";
    return query($query);
}

    return mysqli_affected_rows($conn_ekstra);









?>