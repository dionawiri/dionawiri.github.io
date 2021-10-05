<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../../img/Logo_Ekstra/PMI.png" type="image/gif" sizes="16x16" />
   <!-- live search -->
  
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
     <!-- icon fontawsem -->
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css" />
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
 

<title>konfirmasi Pendaftaran | PMR</title>

</head>
<body>
<!--  Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light shadow navbar-expand-sm "style="background-color: #ed1b2e;" >
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
          <a class="nav-link " aria-current="page" href="logout.php" style="color: white"><i class="fas fa-home" ></i> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login_admin.php" style="color: white">Login Admin <i class="fas fa-sign-in-alt"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar akhir -->


    <?php 
    session_start();

    if ( !isset($_SESSION["stat_login_pmr"])) {
      header("location: login_daftar.php");
      exit;
    }


    require 'functions.php';
    $kelas = query("SELECT * FROM data_pmr WHERE null ");


// tombol cari diklik
    if( isset($_POST["konfirmasi"]) ){
      $kelas = konfirmasi ($_POST["konfirmasi"]);
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
  <h1 class="text-center jdl fw-bold">Daftar Pencarian  <span>PMR</span></h1>
</div>
<div class="container-xxl">
  <div class="bar-search" id="bar-search">
    <nav class="navbar navbar-light  " style="background-color:white;">
      <div class="container-fluid" >
        <form class="d-flex" action="" method="POST">
          <input class="form-control me-2" size="40"type="search" name="konfirmasi" id="konfirmasi" autofocus placeholder="Masukkan NIS (4 Digit)" aria-label="Search" autocomplete="off">
          <button class="btn btn-outline-dark" name="cari" id="tombol-cari" type="submit"><i class="fas fa-search" style="font-size: 17px"></i> </button> 
          <img width="30px" src="../../img/ekstra/pmr/load.gif" class="loader">
        </form>
      </div>
    </nav>
  </div>

<div class="table-responsive" id="kontener">
  <table class="table table-md table-striped table-bordered table-hover">

<tr class="bg-secondary text-white">
  
 
  <th>Id</th>
  <th>Nama</th>
  <th>NIS</th>
  <th>Aksi</th>
</tr>


<?php foreach($kelas as $row) : ?>

  <td><?= $row["id"]; ?></td>
  <td><?= $row["nama"]; ?></td>
  <td><?= $row["nis"]; ?></td> 
  <td>
    <!-- <div class="button-onclick"> -->
      
    <a class="btn btn-warning "  href="cetak1.php?id=<?= $row["id"]; ?>" role="button">
      <i class="fas fa-print"></i> Cetak</a>
    </div>
  </div>


  </td>
 
</tr>

<?php endforeach; ?> 




  </div>
</table>
<p class="card-body inf text-muted fst-italic">
  <i class="fas fa-info-circle"></i>&nbsp;
  Silahkan mendaftar apabila data tidak ditemukan.
</p>
<a class="btn  btn-light fw-bolder"
  style="background-color: #ed1b2e; margin:5px; color: #ffffff; border-color:#ed1b2e ;" href="pendaftaran.php"
  title='Klik Untuk Mendaftar Ekstrakulikuler Tari' role="button" target="_blank">Mendaftar <i
    class="fas fa-arrow-right"></i></a>

<script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/konfirmasi.js"></script>

</body>
</html>