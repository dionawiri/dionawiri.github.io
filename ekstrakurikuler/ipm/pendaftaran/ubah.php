<?php 
session_start();

if ( !isset($_SESSION["login_ipm"])) {
    header("location: login.php");
    exit;
}
// konek database
require 'functions.php';


// ambil data antek-antek
$id = $_GET["id"];


// query data antek berdas id
$kelas = query("SELECT * FROM data_ipm  WHERE id = '".$_GET['id']."'") [0];

// cek tombol ditekan apa blum
if (isset(($_POST["submit"]) )) {    
{
// data berhasil ubah ngga
    if( ubah($_POST) > 0 ){
        echo "
            <script>
                alert('Sipp!! Data berhasil dirubah');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
         echo "
            <script>
                alert('Gagal nih, coba lagi');
                document.location.href = 'admin.php';
            </script>
        ";
    }
  }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" href="../../img/Logo_Ekstra/IPM.png" type="image/gif" sizes="16x16" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ubah Data | IPM</title>
  </head>
  <!-- icon fontawsem -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css" />

  <!-- cssku -->
  <link rel="stylesheet" href="css/admin/ubah.css" />
  <body>
    <div class="form_wrapper">
      <div class="form_container">
        <div class="title_container">
          <h2>Ubah Data Diri Anggota</h2>
        </div>
        <div class="row clearfix">
          <div class="">
            <form action="" method="post">
            <div class="input_field">
                <span><i class="fas fa-address-card"></i></span>
                <input type="hidden" name="id" id="inputnis" value="<?= $kelas["id"]; ?>"/>
              </div>
              <div class="input_field">
                <span><i class="fas fa-user-alt"></i></span>
                <input type="username" name="nama"  value="<?= $kelas["nama"]; ?>" autocomplete="off" placeholder="Nama Lengkap" autocomplete="off" required />
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
                <input type="text" name="alamat" autocomplete="off" placeholder="Alamat"  value="<?= $kelas["alamat"]; ?>" autocomplete="off" required />
              </div>
              <div class="input_field radio_option">
                <input type="radio" name="kelamin" id="rd1" value="<?= $kelas["kelamin"]; ?>" />
                <label for="rd1">Laki-laki <i class="fas fa-mars"></i></label>
                <input type="radio" name="kelamin" id="rd2" value="<?= $kelas["kelamin"]; ?>" />
                <label for="rd2">Perempuan <i class="fas fa-venus"></i></label>
              </div>
              <div class="input_field">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="inputtangallahir"  value="<?= $kelas["tgl_lahir"]; ?>" required />
              </div>
              <div class="input_field">
                <span><i class="fas fa-phone-alt"></i></span>
                <input type="tel" name="tlp" placeholder="No Telepon" value="<?= $kelas["tlp"]; ?>"  autocomplete="off" required />
              </div>
              <div class="input_field">
                <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                <input type="email" name="email" placeholder="Email" value="<?= $kelas["email"]; ?>" autocomplete="off" required />
              </div>
              <input class="button" type="submit" name="submit" value="Simpan" />
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

