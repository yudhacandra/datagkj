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
<td width='940' align='center'>
	<span style='font-size:25px; font-weight: bold;'>JADWAL IBADAH<br>
  GEREJA KRISTEN JAWA BOYOLALI
  </span><br>
  <p></p>
  Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311 <br>
	Telp. Telepon (0276) 321696 ,
	Website: http://www.gkjboyolaliofficial.com, Email:  gkj.boyolali@gmail.com						
</td>
<br>
<a href="pelayan_ibadah.php" class="btn">Kembali</a>
</center>
<p></p>
<br>

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

<tr>
  <br>
  <br>
		<td width='500' align='center'>Boyolali, <br><br><p>&nbsp;</p><br><u>Pdt. Pdt. Nur Bagus Aji Jatmiko, S.Pd.K.</u><br>Gembala Jemaat</td>
	</tr>

<script>
		window.print();
	</script>
</body>
</html>
