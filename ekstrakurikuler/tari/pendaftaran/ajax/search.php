<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM data_tari
    WHERE
    nama LIKE '%$keyword%' OR
    nis LIKE '%$keyword%' OR
    kelas LIKE '%$keyword%' OR
    alamat LIKE '%$keyword%' OR
    tgl_lahir LIKE '%$keyword%' OR
    tlp LIKE '%$keyword%' OR
    email LIKE '%$keyword%'
";
$kelas = query($query);
?>
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
      <a class="btn btn-success "  href="ubah.php?id=<?= $row["id"]; ?>" role="button">
      <svg class="buttons" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg> Edit</a>
    </div>
   
    <a class="btn btn-danger"  href="hapus.php?id=<?= $row["id"]; ?>" onclick="
    return confirm('Yakin nih mau dihapus?');">
      <svg class="buttons" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg> Hapus</a>

    <a class="btn btn-warning "  href="cetak1.php?id=<?= $row["id"]; ?>" role="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
      </svg> Cetak</a>
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
</div>
</table>
