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

<h1>JADWAL IBADAH GKJ BOYOLALI</h1>
<h4>Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311</h4>
<a href="pelayan_ibadah.php" class="btn">Kembali</a>
<p></p>

<table>
  <tr style="background-color:orange">

    <th>Nama Ibadah</th>
    <th>Tempat</th>
    <th>Tanggal</th>
    <th>Waktu Mulai</th>
    <th>Waktu Akhir</th>
    <th>Pengkotbah</th>
    <th>Organis</th>
    <th>Pemandu Nyanyian Jemaat</th>
    <th>Bunga Mimbar</th>
    <th>Keterangan</th>
    <th>PIC</th>
  </tr>

  <?php $i = 1; ?>
<?php foreach ($pelayan_ibadah as $row) : ?>
  <tr>
                    <tr>
                    
                      <td><?= $row["nama_ibadah"]; ?></td>
                      <td><?= $row["tempat"]; ?></td>
                      <td><?= $row["jadwal_ibadah"]; ?></td>
                      <td><?= $row["jam_mulai"]; ?></td>
                      <td><?= $row["jam_akhir"]; ?></td>
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
