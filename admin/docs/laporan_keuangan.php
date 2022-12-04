<?php
include '../../database.php';
$keuangan = mysqli_query($conn, "SELECT * FROM `keuangan` ");
$data = mysqli_fetch_array($keuangan);
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
	<span style='font-size:25px; font-weight: bold;'>LAPORAN KEUANGAN<br>
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
                      <th>Jadwal</th>
                      <th>Jenis Persembahan</th>
                      <th>Nominal</th>
                      <th>Keterangan</th>
  </tr>

  <?php $i = 1; ?>
                  <?php foreach ($keuangan as $row) : 
                    $harga =$row["nominal"];
                    ?>
                    <tr>
                         <td><?= $row["jadwal"]; ?></td>
                      <td><?= $row["jenis_persembahan"]; ?></td>
                      <td>Rp. <?=number_format($harga,2,',','.');?></td>
                      <!-- <td>Rp <?= $row["nominal"]; ?></td> -->
                      <td><?= $row["keterangan"]; ?></td>
                    </tr>
                      <?php $i++; ?>
                    <?php endforeach; 
                  
                  ?>
  </tr>
  <tfoot>
                    <?php
                      $total = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) as totalharga FROM `keuangan`"));
                    ?>
                    <tr>
                        <td><center><b>Total</b></center></td>
                        <td colspan="4"><center><b>Rp.<?= number_format($total["totalharga"],2,',','.'); ?></center></b></td>
                    </tr>
                  </tfoot>
               
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
