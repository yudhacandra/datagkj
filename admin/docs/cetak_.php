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
<td width='940' align='center'>
	<span style='font-size:25px; font-weight: bold;'>STRUKTUR KOMISI<br>
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
  <th rowspan="2"><center>Nama Komisi</center></th>
  <th rowspan="2"><center>Periode Komisi</center></th>
  <th rowspan="2"><center>Jumlah Anggota</center></th>
  </tr>

  <?php $i = 1; ?>
<?php foreach ($data_jemaat as $row) : ?>
  <tr>
                    <tr>
                      <td><?= $row["idnama_komisi"]; ?></td>
                      <td><center><?= $row["periode_komisi"]; ?></center></td>
                      <td><center>
                        
                      <?php
                        $data_jemaat = mysqli_query($conn, "SELECT count(jabatan) as total FROM `data_jemaat` where jabatan='".$row["id_komisi"]."'");
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
