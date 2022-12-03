<?php
include '../../database.php';
$data_jemaat = mysqli_query($conn, "SELECT * FROM `struktur_komisi`");
$data = mysqli_fetch_array($data_jemaat);
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
  <h2>STRUKTUR KOMISI GKJ BOYOLALI</h2>
  <a>Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311</a>
    <a>Telepon (0276) 321696</a>
<a href="struktur_komisi.php" class="btn">Kembali</a>
</center>
<p></p>

<table>
  <tr>
  <th rowspan="2"><center>Nama Komisi</center></th>
  <th rowspan="2"><center>Periode Komisi</center></th>
  <th rowspan="2"><center>Jumlah Anggota</center></th>
  </tr>

  <?php $i = 1; ?>
<?php foreach ($data_jemaat as $row) : ?>
  <tr>
                    <tr>
                      <td><?= $row["idnama_komisi"]; ?></td>
                      <td><?= $row["periode_komisi"]; ?></td>
                      <td><?= $row["id_komisi"]; ?></td>
                  
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
