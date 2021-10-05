<?php 
	include 'koneksi.php';
	session_start();

	$peserta = mysqli_query($conn_ekstra, "SELECT * FROM data_tari
		WHERE id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($peserta);
  $_SESSION = [];
  session_unset();
  session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../../img/Logo_Ekstra/tarilogo.png" type="image/gif" sizes="16x16" />
     <link rel="icon" href="../img/Logo_Ekstra/tarilogo.png" type="image/gif" sizes="16x16" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet" />
    <!-- 2 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin&display=swap" rel="stylesheet">
    <!-- css ku -->
    <link rel="stylesheet" href="css/siswa/card.css" />
    <title>Kartu pendaftaran | Maheswari Tari</title>
  </head>
  <body>
    <div class="certificate-container">
      <div class="certificate">
        <!-- top -->
        <div class="container-gambar">
          <div class="container top">
            <div class="row justify-content-center">
              <div class="col-5 text-start logo d-flex">
                <img src="../../img/logomuhi/Muhi.png" width="80" style="margin-right: auto" alt="" />
              </div>

              <div class="col-5 text-end logo d-flex">
                <img src="../../img/Logo_Ekstra/TARI.jpg" width=" 80" style="border-radius: 50%; margin-left: auto" alt="" />
              </div>
            </div>
          </div>
          <h4 class="pt-5 text-center fw-bolder judul">KARTU PENDAFTARAN EKSTRAKURIKULER <br>TARI</h4>
          <!-- isi -->
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <table class="card-text data fw-bold">
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>&nbsp;&nbsp;<?php echo $p->nama ?></td>
                  </tr>
                  <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>&nbsp;&nbsp;<?php echo $p->kelas ?></td>
                  </tr>              
                  <tr>
                    <td>Jenis Kelamin &nbsp;&nbsp;</td>
                    <td> :</td>
                    <td>&nbsp;&nbsp;<?php echo $p->kelamin ?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>&nbsp;&nbsp;<?php echo $p->alamat ?></td>
                  </tr>
                  <tr>
                    <td>No Telepon &ensp;</td>
                    <td>:</td>
                    <td>&nbsp;&nbsp;<?php echo $p->tlp ?></td>
                  </tr>
                      <td>Email</td>
                    <td>:</td>
                    <td>&nbsp;&nbsp;<?php echo $p->email ?></td>
                  </tr>
                </table>
              </div>

              <div class="col-4 id text-center fw-bold">
              <table class="card-text data fw-bold">
              <tr>
              <tr>
                    <td>NIS &nbsp;</td>
                    <td>:</td>
                    <td><?php echo $p->nis ?></td>
                  </tr>
                    <td>ID &ensp;</td>
                    <td>:</td>
                    <td>&nbsp;<?php echo $p->id ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      window.print();
    </script>
    <!-- bs jcrip -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
