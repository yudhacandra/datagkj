<?php
include '../../database.php';
  ##$alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';
  if(isset($_POST['hapus'])){
    $hapus = $_POST['hapus'];
    $insert_datahapus = mysqli_query($conn,"DELETE FROM `keuangan` WHERE `id_keuangan`='$hapus'") or die("gagal". mysqli_error());
    if($insert_datahapus){
        echo "<script type='text/javascript'>
        alert('Data Berhasil Di Hapus!');
        </script>";
    }
  }


if (isset($_POST['cari'])) {
$cari = $_POST['cari1'];

if ($cari != null) {

  $keuangan = mysqli_query($conn, "SELECT * FROM `keuangan` where `jenis_persembahan` like '%$cari%' or `jenis_persembahan` like '%$cari%' or `jadwal` like '%$cari%' ");
  $data = mysqli_fetch_array($keuangan);
} else {
  $keuangan = mysqli_query($conn, "SELECT * FROM `keuangan` ");
  $data = mysqli_fetch_array($keuangan);
  
}

} else {
  $keuangan = mysqli_query($conn, "SELECT * FROM `keuangan` ");
  $data = mysqli_fetch_array($keuangan);
  
}



$cek = mysqli_num_rows($keuangan);
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
?>
  <body class="app sidebar-mini">
<?php
include 'navbar_menu.php';
include 'sidebar_menu.php';
?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-id-badge" aria-hidden="true"></i></i> Data keuangan GKJ Boyolali</h1>
          <p>Data Keuangan Gereja GKJ Boyolali</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-dashboard"></a></i></li>
          <li class="breadcrumb-item">Keuangan</li>
        </ul>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form action="" method="POST">
              <div class="form-inline">
              <input type="text" name="cari1" class="form-control col-2 m-2">
              <button type="submit" name="cari" class="btn btn-info"><i class="app-menu__icon fa fa-search" aria-hidden="true"></i></button>
              <a href="proses_tambah_keuangan.php" class="btn btn-info ml-2"><i class="app-menu__icon fa fa-plus" aria-hidden="true"></i></a>
              <a href="laporan_keuangan.php" target="blank" class="btn btn-success ml-1 "><i class="app-menu__icon fa fa-download" aria-hidden="true"></i></a>

            </div>
          </form>

              <div style="height: 600px;overflow: scroll;">
                <table class=" table-hover table-bordered" >
                  <?php
                  if ($cek == 0) {
                    echo "  <script>
                    Swal.fire(
                      '<strong>Maaf...!</strong>',
                      'Kata Kunci yang anda masukan tidak ada',
                      'question'
                    )
                   </script>";
                  
                  } else { ?>
              
                  <thead>
                    <tr>
                      <th rowspan="2">Opsi</th>
                      <th rowspan="2">Jadwal</th>
                      <th rowspan="2">Jenis Persembahan</th>
                      <th rowspan="2">Nominal</th>
                      <th rowspan="2">Keterangan</th>
                      
                    </tr>

                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($keuangan as $row) : 
                    $harga =$row["nominal"];
                    ?>
                    <tr>
                      <td><a href="proses_edit_keuangan.php?id=<?= $row["jenis_persembahan"]; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" title="Edit"></i>
                      <form action="" method="POST">
                        <button type="submit" name="hapus" value="<?= $row['id_keuangan']; ?>" class="btn btn-danger m-1" onclick="return confirm('Yakin Hapus?')"><i class="fa fa-lg fa-trash"></i></button>
                      </form>
                    </td>
                      <td><?= $row["jadwal"]; ?></td>
                      <td><?= $row["jenis_persembahan"]; ?></td>
                      <td>Rp. <?=number_format($harga,2,',','.');?></td>
                      <!-- <td>Rp <?= $row["nominal"]; ?></td> -->
                      <td><?= $row["keterangan"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; 
                  }
                  ?>
                   
                  </tbody>
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
              </div>
            
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
    <?php
include 'alert.php';
    ?>
  </body>
</html>

