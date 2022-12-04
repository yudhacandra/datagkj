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
<td width='940' align='center'>
	<span style='font-size:25px; font-weight: bold;'>STRUKTUR MAJELIS<br>
  GEREJA KRISTEN JAWA BOYOLALI
  </span><br>
  <p></p>
  Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311 <br>
	Telp. Telepon (0276) 321696 ,
	Website: http://www.gkjboyolaliofficial.com, Email:  gkj.boyolali@gmail.com						
</td>
<br>
<a href="struktur_majelis.php" class="btn">Kembali</a>
</center>
<p></p>
<br>

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
                      <td><center>
                      <?php
                        $data_jemaat = mysqli_query($conn, "SELECT count(jabatan) as total FROM `data_jemaat` where jabatan='".$row["id_struktur"]."'");
                        $data = mysqli_fetch_array($data_jemaat);
                      ?>
                      
                      <?= $data["total"]; ?></center></td>
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
    <br><br><p></p><br><u>Pdt. Pdt. Nur Bagus Aji Jatmiko, S.Pd.K.</u><br>
    Gembala Jemaat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
	</tr>
  
<script>
		window.print();
	</script>
</body>
</html>
