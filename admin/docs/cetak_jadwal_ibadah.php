<?php
include '../../database.php';
$pelayan_ibadah = mysqli_query($conn, "SELECT * FROM `pelayan_ibadah` ");
$data = mysqli_fetch_array($pelayan_ibadah);
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
  <h1>JADWAL IBADAH GKJ BOYOLALI</h1>
  <a>Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311</a>
    <p><a>Telepon (0276) 321696</a></p>
<a href="pelayan_ibadah.php" class="btn">Kembali</a>
</center>
<p></p>

<table>
  <tr style="background-color:orange">

    <th><center>Nama Ibadah</center></th>
    <th><center>Tempat</center></th>
    <th><center>Tanggal</center></th>
    <th><center>Waktu Mulai</center></th>
    <th><center>Waktu Akhir</center></th>
    <th><center>Pengkotbah</center></th>
    <th><center>Organis</center></th>
    <th><center>Pemandu Nyanyian Jemaat</center></th>
    <th><center>Bunga Mimbar</center></th>
    <th><center>Keterangan</center></th>
    <th><center>PIC</center></th>
  </tr>

  <?php $i = 1; ?>
<?php foreach ($pelayan_ibadah as $row) : ?>
  <tr>
                    <tr>
                    
                      <td><?= $row["nama_ibadah"]; ?></td>
                      <td><?= $row["tempat"]; ?></td>
                      <td><center><?= $row["jadwal_ibadah"]; ?></center></td>
                      <td><center><?= $row["jam_mulai"]; ?></center></td>
                      <td><center><?= $row["jam_akhir"]; ?></center></td>
                      <td><?= $row["pengkotbah"]; ?></td>
                      <td><?= $row["organis"]; ?></td>
                      <td><?= $row["pemandu_nyanyian"]; ?></td>
                      <td><?= $row["bunga_mimbar"]; ?></td>
                      <td><?= $row["keterangan"]; ?></td>
                      <td><?= $row["penanggung_jawab"]; ?></td>
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
