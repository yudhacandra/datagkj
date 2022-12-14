<?php
include '../../database.php';
  ##$alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';
  if(isset($_POST['hapus'])){
    $hapus = $_POST['hapus'];
    $insert_datahapus = mysqli_query($conn,"DELETE FROM `proker` WHERE `id_proker`='$hapus'") or die("gagal". mysqli_error());
    if($insert_datahapus){
        echo "<script type='text/javascript'>
        alert('Data Berhasil Di Hapus!');
        </script>";
    }
  }

if (isset($_POST['cari'])) {
$cari = $_POST['cari1'];

if ($cari != null) {

  $proker = mysqli_query($conn, "SELECT * FROM `proker` where `nama_proker` like '%$cari%' or `id_proker` like '%$cari%' or `bidang` like '%$cari%' ");
  $data = mysqli_fetch_array($proker);
} else {
  $proker = mysqli_query($conn, "SELECT * FROM `proker` order by `date` desc ");
  $data = mysqli_fetch_array($proker);
  
}

} else {
  $proker = mysqli_query($conn, "SELECT * FROM `proker` order by `date` desc ");
  $data = mysqli_fetch_array($proker);
  
}



$cek = mysqli_num_rows($proker);
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
          <h1><i class="fa fa-id-badge" aria-hidden="true"></i></i> Program Kerja Tahunan GKJ Boyolali</h1>
          <p>Program Kerja Tahunan GKJ Boyolali</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-dashboard"></a></i></li>
          <li class="breadcrumb-item">Program Kerja Tahunan</li>
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
              <a href="proses_tambah_proker.php" class="btn btn-info ml-2"><i class="app-menu__icon fa fa-plus" aria-hidden="true"></i></a>
              <a href="cetak_proker.php" target="blank" class="btn btn-success ml-1 "><i class="app-menu__icon fa fa-download" aria-hidden="true"></i></a>
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
                      <th rowspan="2">Bidang</th>
                      <th rowspan="2">Nama Program</th>
                      <th rowspan="2">Jenis Kegiatan</th>
                      <th rowspan="5">Waktu</th>
                      <th rowspan="2">Keterangan</th>
                    </tr>

                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($proker as $row) : ?>
                    <tr>
                      <td><a href="proses_edit_proker.php?id=<?= $row["id_proker"]; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" title="Edit"></i>
                      <form action="" method="POST">
                        <button type="submit" name="hapus" value="<?= $row['id_proker']; ?>" class="btn btn-danger m-1" onclick="return confirm('Yakin Hapus?')"><i class="fa fa-lg fa-trash"></i></button>
                      </form>
                    </td>
                      <td><?= $row["bidang"]; ?></td>
                      <td><?= $row["nama_proker"]; ?></td>
                      <td><?= $row["jenis_kegiatan"]; ?></td>
                      <td><?= $row["waktu"]; ?></td>
                      <td><?= $row["keterangan"]; ?></td>
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