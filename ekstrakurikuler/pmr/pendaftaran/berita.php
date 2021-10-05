
<?php 
require 'koneksi.php';
require 'functions.php';

if(isset($_POST['tambah_berita'])) {

  $insert = mysqli_query($conn_berita, "INSERT INTO data_pmr
        VALUES
        ( '".$_POST['judul']."',
          '".$_POST['kategori']."',
          '".$_POST['isi']."',
          '".$_FILES['gambar']."'
    )");
    

      move_uploaded_file($_FILES['gambar']['tmp_name'],"../berita/");

    

      {
        // cek data masuk
    if($insert){
        echo '<script>window.location="admin.php"</script>';
    } else {
        echo "
        <script>
        alert('data gagal masuk :(');
        
        </script>
        ";
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
          <h2>UPDATE BERITA </h2>
        </div>
        <div class="row clearfix">
          <div class="">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="input_field">
                <span><i class="fas fa-user-alt"></i></span>
                <input type="text" name="judul" autocomplete="off" placeholder="Judul Berita" autocomplete="off" required />
              </div>
              <div class="input_field select_option">
                <select name="kategori" required>
                  <option value="">-----Kategori-----</option>
                  <option value="Berita Utama">Berita Utama</option>
                  <option value="Pengumuman">Pengumuman</option>
                  <option value="Info">Info</option>
                  <option value="Kategori 1">Kategori 1</option>
                </select>
                <div class="select_arrow"></div>
              </div>
              <div class="input_field">
                
                <textarea  name="isi" autocomplete="off" placeholder="Isi Berita"  cols="45" rows="10" autocomplete="off" required></textarea>
              </div>
              <div class="input-group mb-3">
              <input type="file" class="form-control" id="inputGroupFile02" name="gambar">
              
             </div>
              
              
              <input class="button" type="submit" name="tambah_berita" value="Upload" required/>
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





