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

<h2>Laporan Keuangan</h2>
<a href="data_jemaat.php" class="btn">Kembali</a>
<p></p>

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
                      <td><b>Total</b></td>
                      <td colspan="4"><b>Rp.<?= number_format($total["totalharga"],2,',','.'); ?></b></td>
                    </tr>
                  </tfoot>
</table>
<script>
		window.print();
	</script>
</body>
</html>
