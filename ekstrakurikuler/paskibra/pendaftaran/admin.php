<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../../img/Logo_Ekstra/Paskib.png" type="image/gif" sizes="16x16" />
   <!-- live search -->
  
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oxygen:300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- My CSS -->
  <link rel="stylesheet" href="css/admin/admin.css" />
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

<title>Daftar Anggota | PASKIB</title>

</head>
<body>
<!--  Navbar -->
<nav class="navbar fixed-top navbar-dark navbar-expand-lg shadow navbar-expand-sm "style="background-color: #ed1b2e;" >
    <div class="container " >
     <span class="navbar-brand" >
      <img src="../../img/logomuhi/Muhi.png" alt="" width="31" height="31" class="d-inline-block align-text-center">
      <b style ="font-size: 13px; color: white ;">SMK 1 MUHAMMADIYAH WONOSOBO</b>
    </span>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="login_daftar.php" target="_blank"style="color: white">Login Siswa <i class="fas fa-user-friends" ></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: white">Logout <i class="fas fa-sign-out-alt" style='font-size:17px; color: white' ></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar akhir -->


    <?php 
    session_start();

    if ( !isset($_SESSION["login_paskib"])) {
      header("location: login_admin.php");
      exit;
    }


    require 'functions.php';
    $kelas = query("SELECT * FROM data_paskib ");


// tombol cari diklik
    if( isset($_POST["cari"]) ){
      $kelas = cari ($_POST["keyword"]);
    }

    ?>




    <style>
    .button-onclick {
      font-family: gotham;
      margin-left: 90%;

      display: flex;
      align-items: center;
      justify-content: space-between;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <h1 class="text-center jdl fw-bold">Daftar Calon Anggota <span>PASKIB</span></h1>
</div>
<div class="container-xxl">
  <div class="bar-search" id="bar-search">
    <nav class="navbar navbar-light  " style="background-color:white;">
      <div class="container-fluid" >
        <form class="d-flex" action="" method="POST">
          <input class="form-control me-2" size="40"type="search" name="keyword" id="keyword" autofocus placeholder="Cari Data Anggota" aria-label="Search" autocomplete="off">
          <img width="30px" src="../../img/ekstra/paskibra/load.gif" class="loader">
        </form>
        <div class="button-export">
            <a class="btn btn-dark" style="font-style: sans-serif;" href="export.php" role="button"> 
            <i class='fas fa-file-export' style='font-size:15px'></i> Export</a>
        </div>
      </div>
    </nav>
  </div>

<div class="table-responsive" id="kontener">
  <table class="table table-md table-striped table-bordered table-hover">

<tr class="bg-secondary text-white">
  <th>No</th>
  <th><center>Aksi</center></th>
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

  <td><?= $i; ?></td>
  <td>
    <!-- <div class="button-onclick"> -->
      <div style="float:left;">

      <a class="btn btn-success mb-1"  href="ubah.php?id=<?= $row["id"]; ?>" role="button">
      <svg class="buttons" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg> Edit</a>
   
    <a class="btn btn-danger mb-1"  href="hapus.php?id=<?= $row["id"]; ?>" onclick="
    return confirm('Yakin nih mau dihapus?');">
      <svg class="buttons" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg> Hapus</a>

    <a class="btn btn-warning mb-1"  href="cetak1.php?id=<?= $row["id"]; ?>" role="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
      </svg> Cetak</a>
    </div>
  </div>


  </td>
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




  </div>
</table>


<script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/admin.js"></script>

</body>
</html>