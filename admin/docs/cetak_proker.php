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
<td width='940' align='center'>
	<span style='font-size:25px; font-weight: bold;'>PROGRAM KERJA TAHUNAN<br>
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

<tr>
  <br>
  <br>
		<h4 width='500' align='right'>Boyolali,
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br><br><p></p><br><u>Pdt. Nur Bagus Aji Jatmiko, S.Pd.K.</u><br>
    Gembala Jemaat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
	</tr>

<script>
		window.print();
	</script>
</body>
</html>
