<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <?php 
    require 'functions.php';
    $kelas = query("SELECT * FROM data_pmr ");
    ?>
  <h1>Daftar Calon Anggota</h1>
<style>
  table, th, td{
    border : 1px solid black;
  }
</style>

    <table>
  
  <tr>
    <th>No</th>
    <th>Id</th>
    <th>Nama</th>
    <th>NIS</th>
    <th>Kelas</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>Tanggal Lahir</th>
    <th>No Telepon</th>
    <th>Email</th>
  </tr>
  
  <?php $i = 1; ?>
  <?php foreach($kelas as $row) : ?>
  <tr>
    <td><?= $i; ?></td>
    <td><?= $row["id"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["nis"]; ?></td>
    <td><?= $row["kelas"]; ?></td>
    <td><?= $row["alamat"]; ?></td>
    <td><?= $row["kelamin"]; ?></td>
    <td><?= $row["tgl_lahir"]; ?></td>
    <td><?= $row["tlp"]; ?></td>
    <td><?= $row["email"]; ?></td>
  </tr>
  <?php $i++; ?>
  <?php endforeach; ?>
  
  
  
  
  
  </table>
  
  
</body>
</html>