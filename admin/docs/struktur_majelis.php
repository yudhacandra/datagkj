<?php
include '../../database.php';
  ##$alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';
  if(isset($_POST['hapus'])){
    $hapus = $_POST['hapus'];
    $jbt = "";
    $data_jemaat = mysqli_query($conn, "UPDATE `data_jemaat` SET `jabatan` = '$jbt' WHERE `data_jemaat`.`jabatan` = '$hapus'");
    $data = mysqli_fetch_array($data_jemaat);
    $insert_datahapus = mysqli_query($conn,"DELETE FROM `struktur_majelis` WHERE `id_struktur`='$hapus'") or die("gagal". mysqli_error());
    if($insert_datahapus){
        echo "<script type='text/javascript'>
        alert('Data Berhasil Di Hapus!');
        </script>";
    }
  }

if (isset($_POST['cari'])) {
$cari = $_POST['cari1'];

if ($cari != null) {

  $struktur_majelis = mysqli_query($conn, "SELECT * FROM `struktur_majelis` where `idjabatan_majelis` like '%$cari%' or `idjabatan_majelis` like '%$cari%' ");
  $data = mysqli_fetch_array($struktur_majelis);
} else {
  $struktur_majelis = mysqli_query($conn, "SELECT * FROM `struktur_majelis` ");
  $data = mysqli_fetch_array($struktur_majelis);
  
}

} else {
  $struktur_majelis = mysqli_query($conn, "SELECT * FROM `struktur_majelis` ");
  $data = mysqli_fetch_array($struktur_majelis);
  
}



$cek = mysqli_num_rows($struktur_majelis);
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
          <h1><i class="fa fa-universal-access" aria-hidden="true"></i></i> Struktur Majelis GKJ Boyolali</h1>
          <p>Struktur Majelis Gereja GKJ Boyolali</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-dashboard"></a></i></li>
          <li class="breadcrumb-item">Bidang Majelis</li>
          <li class="breadcrumb-item">Struktur Majelis</li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form action="" method="POST">
              <div class="form-inline">
              <input type="text" name="cari1" class="form-control col-2 m-2">
              <button type="submit" name="cari" class="btn btn-info"><i class="app-menu__icon fa fa-search" aria-hidden="true"></i></button>
              <a href="proses_tambah_struktur_majelis.php" class="btn btn-success ml-1 "><i class="app-menu__icon fa fa-plus" aria-hidden="true"></i></a>
              <a href="cetak_struktur_majelis.php" target="blank" class="btn btn-success ml-1 "><i class="app-menu__icon fa fa-download" aria-hidden="true"></i></a>
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
                      <th rowspan="2">Jabatan Bidang Majelis</th>
                      <th rowspan="2">Tugas dan Tanggung Jawab</th>
                      <th rowspan="2">Periode Majelis</th>
                      <th rowspan="2">Jumlah Anggota</th>
                    </tr>

                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($struktur_majelis as $row) : ?>
                    <tr>
                      <td>
                        <a class="btn btn-primary" href="proses_edit_struktur_majelis.php?id=<?= $row["idjabatan_majelis"]; ?>"><i class="fa fa-lg fa-edit"></i></a>
                        <form action="" method="POST">
                        <button type="submit" name="hapus" value="<?= $row['id_struktur']; ?>" class="btn btn-danger m-1" onclick="return confirm('Yakin Hapus?')"><i class="fa fa-lg fa-trash"></i></button>
                      </form>
                        <!-- <a class="btn btn-primary m-1" href="proses_hapus_struktur_majelis.php?id=<?= $row["idjabatan_majelis"]; ?>"><i class="fa fa-lg fa-trash"></i></a></td> -->
                      <td><?= $row["idjabatan_majelis"]; ?></td>
                      <td><?= $row["tugas_tanggungjawab"]; ?></td>
                      <td><?= $row["periode_majelis"]; ?></td>
                      <td>
                        <?php
                        $jumlahjabatan = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(jabatan) as jabatan FROM `data_jemaat` WHERE jabatan ='".$row["id_struktur"]."'"));
                        ?>
                        <a href="data_jemaat_majelis.php?id=<?=$row["id_struktur"]?>" class="btn btn-danger"><?= $jumlahjabatan["jabatan"]; ?></a>
                        
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; 
                  }
                  ?>

                   
                  </tbody>
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