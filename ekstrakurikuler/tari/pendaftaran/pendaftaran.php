
<?php 
require 'koneksi.php';
require 'functions.php';
session_start();


    if ( !isset($_SESSION["stat_login_tari"])) {
      header("location: login_daftar.php");
      exit;
    }

if(isset($_POST['submit'])) {

    //  cek data, apakah NIS sudah didaftarkan
     if (isset($_POST['nis'])) {
        $nis = $_POST['nis'];
       
        $query = mysqli_query($conn_ekstra, "SELECT nis FROM data_tari WHERE nis = '$nis'"); 
       
        if($query->num_rows > 0) {
         echo "<script>alert('NIS sudah terdaftar. Hubungi pengurus untuk merubah');
         document.location.href = 'pendaftaran.php';</script>";

         exit;
        } 
       }

    //cek data, apakah NIS ada atau tidak
    $cek = mysqli_query($conn_siswa, "SELECT * FROM login
			WHERE username = '$nis' ");


		if(mysqli_num_rows($cek) > 0){
			$a = mysqli_fetch_object($cek);
            $_SESSION['username'] = $a->username;
        }else{
			$error = true;
            echo "<script>alert('NIS salah/tidak ada');
            document.location.href = 'pendaftaran.php';</script>";
           
            exit;
		}   
   
        // ambil id
    $getMaxId = mysqli_query($conn_ekstra, "SELECT MAX(RIGHT(id, 5)) AS id FROM
        data_tari");
    $d = mysqli_fetch_object($getMaxId);
    
    $generateId = 'TR'.date('Y') .sprintf("%05s", $d->id + 1);


        // pros insert data
    $insert = mysqli_query($conn_ekstra, "INSERT INTO data_tari
        VALUES
        ( '".$generateId."',
        '".$_POST['nama']."',
        '".$_POST['nis']."',
        '".$_POST['kelas']."',
        '".$_POST['alamat']."',
        '".$_POST['kelamin']."',
        '".$_POST['tgl_lahir']."',
        '".$_POST['tlp']."',
        '".$_POST['email']."'
    )");
   

    {
            // cek data masuk
        if($insert){
            echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
        } else {
            echo "
            <script>
            alert('data gagal masuk :(');
            document.location.href = 'index_ipm.html';
            </script>
            ";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" href="../../img/Logo_Ekstra/tarilogo.png" type="image/gif" sizes="16x16" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran Tari</title>
  </head>
  <!-- icon fontawsem -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css" />

  <!-- cssku -->
  <link rel="stylesheet" href="css/siswa/style_daftar.css" />
  <body>
    <div class="form_wrapper">
      <div class="form_container">
        <div class="title_container">
          <h2>Formulir Pendaftaran Ekstrakulikuler Tari</h2>
        </div>
        <div class="row clearfix">
          <div class="">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="input_field">
                <span><i class="fas fa-user-alt"></i></span>
                <input type="username" name="nama" autocomplete="off" placeholder="Nama Lengkap" autocomplete="off" required />
              </div>
              <div class="input_field">
                <span><i class="fas fa-address-card"></i></span>
                <input type="nis" name="nis" id="inputnis" autocomplete="off" placeholder="NIS" autocomplete="off" required />
              </div>
              <div class="input_field select_option">
                <select name="kelas" required>
                  <option value="">-----Kelas-----</option>
                  <option value="10 RPL">10 RPL</option>
                  <option value="10 TKJ">10 TKJ</option>
                  <option value="10 TBSM">10 TBSM</option>
                  <option value="10 AKL">10 AKL</option>
                  <option value="10 PDB">10 BDP</option>
                  <option value="10 RPL">11 RPL</option>
                  <option value="10 TKJ">11 TKJ</option>
                  <option value="10 TBSM">11 TBSM</option>
                  <option value="10 AKL">11 AKL</option>
                  <option value="10 PDB">11 BDP</option>
                </select>
                <div class="select_arrow"></div>
              </div>
              <div class="input_field">
                <span><i class="fas fa-map-marked-alt"></i></span>
                <input type="text" name="alamat" autocomplete="off" placeholder="Alamat" autocomplete="off" required />
              </div>
              <div class="input_field radio_option">
                <input type="radio" name="kelamin" id="rd1" value="laki-laki" />
                <label for="rd1">Laki-laki <i class="fas fa-mars"></i></label>
                <input type="radio" name="kelamin" id="rd2" value="perempuan" />
                <label for="rd2">Perempuan <i class="fas fa-venus"></i></label>
              </div>
              <div class="input_field">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="inputtangallahir" required />
              </div>
              <div class="input_field">
                <span><i class="fas fa-phone-alt"></i></span>
                <input type="tel" name="tlp" placeholder="No Telepon" autocomplete="off" required />
              </div>
              <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                <input type="email" name="email" placeholder="Email" autocomplete="off" required />
              </div>
              <input class="button" type="submit" name="submit" value="Daftar" />
            </form>
          </div>
        </div>
      </div>
    </div>
    <p class="credit">
      <?php echo "Copyright © 2020-" . (int)date('Y'). ",Developed By" ?>
      <span>BalioMa</span>
    </p>
  </body>
</html>





