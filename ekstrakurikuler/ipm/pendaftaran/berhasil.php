<?php 
	include 'koneksi.php';
	session_start();
  

  require 'functions.php';
  $kelas = query("SELECT * FROM data_ipm ");
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" href="../../img/Logo_Ekstra/IPM.png" type="image/gif" sizes="16x16" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/siswa/berhasil.css" />
    <title>Pendaftaran Berhasil</title>
  </head>

  <body>

  <section class="conkartu">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col p-2">
            <!-- card -->
            <div class="card text-center">
              <div class="card-header">
                <ul class="nav nav-pills card-header-pills pe-2 ps-2">
                  <li class="nav-item">
                    <a class="btn btn-light fw-bolder" style="background-color: #28334aff; color: #ffc400; border-color: #ffc400" href="login_daftar.php" title="Klik Untuk Mendaftar Ekstrakulikuler Tari" role="button" target="_blank"
                      ><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" /></svg
                      >Home</a
                    >
                  </li>
                  <li class="nav-item wa_admin">
                    <a class="nav-link" href="https://wa.me/6285155097533" style="color:green;" target="_blank"
                      >Hubungi Admin&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="me-2 bi-whatsapp" viewBox="0 0 16 16">
                        <path
                          d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
                        /></svg
                    ></a>
                  </li>
                </ul>
              </div>
              <div class="card-body text-capitalize">
                <h1 class="card-title">Yeeey, Pendaftaranmu Berhasil !</h1>
                <p class="card-text pt-2 id">
                  
                  ID Pendaftaranmu Adalah
                  <?php echo $_GET['id'] ?>
                  <span>Silahkan Print Kartu Bukti Pendaftaranmu Jika Diperlukan.</span>
                </p>
                <p class="card-body inf text-muted fst-italic">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path
                      d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
                    />
                  </svg>&nbsp;
                  Apabila Ada Kesalahan dalam Penginputan Data, Harap Hubungi <br> Admin Dan Cantumkan Kartu Pendaftaraan Yang Akan Di Ubah/Hapus.
                </p>
                <a  href="cetak.php?id=<?php echo $_GET['id'] ?>" target="_blank" role="button" class="btn btn-primary" style="background-color: #ffc400; color: #28334aff; border-color: #ffc400"
                  >Cetak Kartu &nbsp;
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" /></svg
                ></a>
              </div>
            </div>
            <!-- end -->
          </div>
        </div>
      </div>
    </section>
    <!-- Option 1: Bootstrap 5 Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php
$_SESSION = [];
session_unset();
session_destroy();
?>
  </body>
</html>
