<?php
include '../../database.php';
$data_jemaat = mysqli_query($conn, "SELECT * FROM `data_jemaat` order by tanggal_terdaftar DESC ");
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

<h2>Data Jemaat GKJ Boyolali</h2>
<a href="data_jemaat.php" class="btn">Kembali</a>
<p></p>

<table>
  <tr>
  <th >No Induk</th>
<th >Nama</th>
<th >Jenis Kelamin</th>
<th >Alamat</th>
  </tr>

  <?php $i = 1; ?>
<?php foreach ($data_jemaat as $row) : ?>
  <tr>
                    <tr>
                      <td><?= $row["no_induk"]; ?></td>
                      <td><?= $row["nama"]; ?></td>
                      <td><?= $row["jenis_kelamin"]; ?></td>
                      <td><?= $row["alamat"]; ?></td>
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
