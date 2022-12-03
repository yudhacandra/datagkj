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

<center>
  <h2>LAPORAN KEUANGAN GKJ BOYOLALI</h2>
  <a>Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311</a>
  <p></p>
  <a>Telepon (0276) 321696</a>
  <a href="data_jemaat.php" class="btn">Kembali</a>
</center>
<p></p>

<table>
  <tr>
    <th >No Induk</th>
    <th >Nama</th>
    <th >Jenis Kelamin</th>
    <th >Lahir</th>
    <th >Alamat</th>
    <th >Baptis</th>
    <th >Sidi</th>
    <th >Wilayah</th>
  </tr>

  <?php $i = 1; ?>
<?php foreach ($data_jemaat as $row) : ?>
  <tr>
                    <tr>
                      <td><?= $row["no_induk"]; ?></td>
                      <td><?= $row["nama"]; ?></td>
                      <td><?= $row["jenis_kelamin"]; ?></td>
                      <td><?= $row["lahir"]; ?></td>
                      <td><?= $row["alamat"]; ?></td>
                      <td><?= $row["baptis"]; ?></td>
                      <td><?= $row["sidi"]; ?></td>
                      <td><?= $row["keterangan_tambahan"]; ?></td>
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
