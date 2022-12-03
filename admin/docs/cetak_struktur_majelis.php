<?php
include '../../database.php';
$struktur_majelis = mysqli_query($conn, "SELECT * FROM `struktur_majelis` ");
$data = mysqli_fetch_array($struktur_majelis);
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
  <h2>STRUKTUR MAJELIS GKJ BOYOLALI</h2>
  <a>Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311</a>
    <a>Telepon (0276) 321696</a>
  <a href="struktur_majelis.php" class="btn">Kembali</a>
</center>
<p></p>

<table>
  <tr>
                      <th><center>Jabatan Bidang Majelis</center></th>
                      <th><center>Periode Majelis</center></th>
                      <th><center>Jumlah Anggota</center></th>
  </tr>

  <?php $i = 1; ?>
<?php foreach ($struktur_majelis as $row) : ?>
  <tr>
                    <tr>
                      <td><?= $row["idjabatan_majelis"]; ?></td>
                      <td><center><?= $row["periode_majelis"]; ?></center></td>
                      <td><center><?= $row["id_struktur"]; ?></center></td>
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
