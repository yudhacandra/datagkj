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
  <h2>LAPORAN KEUANGAN GKJ BOYOLALI</h2>
  <a>Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311</a>
  <p></p>
  <a>Telepon (0276) 321696</a>
  <a href="keuangan.php" class="btn">Kembali</a>
</center>
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
                        <td><center><b>Total</b></center></td>
                        <td colspan="4"><center><b>Rp.<?= number_format($total["totalharga"],2,',','.'); ?></center></b></td>
                    </tr>
                  </tfoot>
               
</table>
<script>
		window.print();
	</script>
</body>
</html>
