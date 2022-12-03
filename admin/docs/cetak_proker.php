<?php
include '../../database.php';
$proker = mysqli_query($conn, "SELECT * FROM `proker` ");
$data = mysqli_fetch_array($proker);
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<center>
  <h2>LAPORAN PROGRAM KERJA TAHUNAN</h2>
  <h2>GKJ BOYOLALI</h2>
  <a>Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311</a>
    <a>Telepon (0276) 321696</a>
  <a href="proker.php" class="btn">Kembali</a>
</center>
<p></p>

<table>
  <tr>
                      <th>Bidang</th>
                      <th>Nama Program</th>
                      <th>Jensi Kegiatan</th>
                      <th>Waktu</th>
                      <th>Keterangan</th>
  </tr>

  <?php $i = 1; ?>
<?php foreach ($proker as $row) : ?>
  <tr>
                    <tr>
                      <td><?= $row["bidang"]; ?></td>
                      <td><?= $row["nama_proker"]; ?></td>
                      <td><?= $row["jenis_kegiatan"]; ?></td>
                      <td><?= $row["waktu"]; ?></td>
                      <td><?= $row["keterangan"]; ?></td>
                      <?php $i++; ?>
                    <?php endforeach; 
                  
                  ?>
  </tr>    
</table>
<script>
		window.print();
	</script>
</body>
</html>
