<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../../img/Logo_Ekstra/IPM.png" type="image/gif" sizes="16x16" />
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
 

<title>konfirmasi Pendaftaran | IPM</title>

</head>
<body>
<!--  Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light shadow navbar-expand-sm "style="background-color: #fd9800;" >
    <div class="container " >
     <a class="navbar-brand" href="#">
      <img src="../../img/logomuhi/Muhi.png" alt="" width="31" height="31" class="d-inline-block align-text-center">
      <b style ="font-size: 13px; color: black ;">SMK 1 MUHAMMADIYAH WONOSOBO</b>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../">Home <i class="fa fa-home" style="color: black"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login_admin.php" target="_blank">Login Admin <i class="fas fa-user-friends" style="color: black"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" target="_blank">Logout <i class="fas fa-sign-out-alt" style='font-size:17px; color: black' ></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar akhir -->


    <?php 
    session_start();

    if ( !isset($_SESSION["stat_login_ipm"])) {
      header("location: login_daftar.php");
      exit;
    }


    require 'functions.php';
    $kelas = query("SELECT * FROM data_ipm WHERE null ");


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
  <h1 class="text-center jdl fw-bold">Daftar Pencarian  <span>IPM</span></h1>
</div>
<div class="container-xxl">
  <div class="bar-search" id="bar-search">
    <nav class="navbar navbar-light  " style="background-color:white;">
      <div class="container-fluid" >
        <form class="d-flex" action="" method="POST">
          <input class="form-control me-2" size="40"type="search" name="konfirmasi" id="konfirmasi" autofocus placeholder="Masukkan NIS (4 Digit)" aria-label="Search" autocomplete="off">
          <button class="btn btn-outline-dark" name="cari" id="tombol-cari" type="submit"><i class="fa fa-search" style="font-size: 17px"></i> </button>
          <img width="30px" src="../../img/ekstra/paskibra/load.gif" class="loader">
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
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
      </svg> Cetak</a>
    </div>
  </div>


  </td>
 
</tr>

<?php endforeach; ?> 




  </div>
</table>
<p class="card-body inf text-muted fst-italic">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path
                      d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
                    />
                  </svg>&nbsp;
                  Silahkan mendaftar apabila data tidak ditemukan.
                </p>
                <a  href="pendaftaran.php" target="_blank" role="button" class="btn btn-primary" style="background-color: #ffc400; color: #28334aff; border-color: #ffc400"
                  >Mendaftar &nbsp;
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16"> -->
                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" /></svg

<script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/konfirmasi.js"></script>

</body>
</html>