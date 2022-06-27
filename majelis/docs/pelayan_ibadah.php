<?php
include '../../database.php';
  ##$alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';


if (isset($_POST['cari'])) {
$cari = $_POST['cari1'];

if ($cari != null) {

  $pelayan_ibadah = mysqli_query($conn, "SELECT * FROM `pelayan_ibadah` where `nama_ibadah` like '%$cari%' or `id_ibadah` like '%$cari%' or `pengkotbah` like '%$cari%' or `organis` like '%$cari%' or `pemandu_nyanyian` like '%$cari%' or `bunga_mimbar` like '%$cari%'");
  $data = mysqli_fetch_array($pelayan_ibadah);
} else {
  $pelayan_ibadah = mysqli_query($conn, "SELECT * FROM `pelayan_ibadah` ");
  $data = mysqli_fetch_array($pelayan_ibadah);
  
}

} else {
  $pelayan_ibadah = mysqli_query($conn, "SELECT * FROM `pelayan_ibadah` ");
  $data = mysqli_fetch_array($pelayan_ibadah);
  
}

$cek = mysqli_num_rows($pelayan_ibadah);
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
          <h1><i class="fa fa-university" aria-hidden="true"></i> Pelayanan Ibadah GKJ Boyolali</h1>
          <p>Pelayan Ibadah Gereja Keristen Jawa Boyolali</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_majelis.php"><i class="fa fa-dashboard"></a></i></li>
          <li class="breadcrumb-item">Jadwal Ibadah</li>
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
              <a href="proses_tambah_pelayan_ibadah.php" class="btn btn-info ml-2"><i class="app-menu__icon fa fa-plus" aria-hidden="true"></i></a>
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
                      <th rowspan="2">Nama Ibadah</th>
                      <th rowspan="2">Tempat</th>
                      <th rowspan="2">Jadwal Ibadah</th>
                      <th rowspan="2">Pengkotbah</th>
                      <th rowspan="2">Organis</th>
                      <th rowspan="2">Pemandu Nyanyian Jemaat</th>
                      <th rowspan="2">Bunga Mimbar</th>
                      <th rowspan="2">Keterangan</th>
                      <th rowspan="2">PIC</th>
                    </tr>

                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($pelayan_ibadah as $row) : ?>
                    <tr>
                      <td><a href="proses_edit_pelayan_ibadah.php?id=<?= $row["id_ibadah"]; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" title="Edit"></i></td>
                      <td><?= $row["nama_ibadah"]; ?></td>
                      <td><?= $row["tempat"]; ?></td>
                      <td><?= $row["jadwal_ibadah"]; ?></td>
                      <td><?= $row["pengkotbah"]; ?></td>
                      <td><?= $row["organis"]; ?></td>
                      <td><?= $row["pemandu_nyanyian"]; ?></td>
                      <td><?= $row["bunga_mimbar"]; ?></td>
                      <td><?= $row["keterangan"]; ?></td>
                      <td><?= $row["penanggung_jawab"]; ?></td>
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