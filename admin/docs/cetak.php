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
<td width='940' align='center'>
	<span style='font-size:25px; font-weight: bold;'>DATA JEMAAT<br>
  GEREJA KRISTEN JAWA BOYOLALI
  </span><br>
  <p></p>
  Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311 <br>
	Telp. Telepon (0276) 321696 ,
	Website: http://www.gkjboyolaliofficial.com, Email:  gkj.boyolali@gmail.com						
</td>
<br>
</center>
<p></p>
<br>

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
                      <td><center><?= $row["jenis_kelamin"]; ?></center></td>
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

<tr>
  <br>
  <br>
		<h4 width='500' align='right'>Boyolali,
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br><br><p></p><br><u>Pdt.Nur Bagus Aji Jatmiko, S.Pd.K.</u><br>
    Gembala Jemaat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
	</tr>

<script>
		window.print();
	</script>
</body>
</html>
