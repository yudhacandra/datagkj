<?php
include '../../database.php';
  ##$alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';


if (isset($_POST['cari'])) {
$cari = $_POST['cari1'];

if ($cari != null) {

  $struktur_komisi = mysqli_query($conn, "SELECT * FROM `struktur_komisi` where `idnama_komisi` like '%$cari%' or `idnama_komisi` like '%$cari%' ");
  $data = mysqli_fetch_array($struktur_komisi);
} else {
  $struktur_komisi = mysqli_query($conn, "SELECT * FROM `struktur_komisi` ");
  $data = mysqli_fetch_array($struktur_komisi);
  
}

} else {
  $struktur_komisi = mysqli_query($conn, "SELECT * FROM `struktur_komisi` ");
  $data = mysqli_fetch_array($struktur_komisi);
  
}



$cek = mysqli_num_rows($struktur_komisi);
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
          <h1><i class="fa fa-universal-access" aria-hidden="true"></i></i> Data Komisi GKJ Boyolali</h1>
          <p>Data Komisi Gereja GKJ Boyolali</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-dashboard"></a></i></li>
          <li class="breadcrumb-item">Bidang Komisi</li>
          <li class="breadcrumb-item">Komisi</li>
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
              <a href="proses_tambah_struktur_komisi.php" class="btn btn-info ml-2"><i class="app-menu__icon fa fa-plus" aria-hidden="true"></i></a>
              <a href="cetak_.php" target="blank" class="btn btn-success ml-1 "><i class="app-menu__icon fa fa-download" aria-hidden="true"></i></a>
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
                      <th rowspan="2">Nama Komisi</th>
                      <th rowspan="2">Periode Komisi</th>
                      <th rowspan="2">Jumlah Anggota</th>
                    </tr>

                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($struktur_komisi as $row) : ?>
                    <tr>
                      <td><a href="proses_edit_struktur_komisi.php?id=<?= $row["idnama_komisi"]; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" title="Edit"></i></td>
                      <td><?= $row["idnama_komisi"]; ?></td>
                      <td><?= $row["periode_komisi"]; ?></td>
                      <td>
                      <?php
                        $jumlahkomisi = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_komisi) as komisi FROM `data_jemaat` WHERE Id_komisi ='".$row["id_komisi"]."'"));
                        ?>
                        <a href="data_jemaat_majelis_komisi.php?id=<?=$row["id_komisi"]?>" class="btn btn-danger"><?= $jumlahkomisi["komisi"]; ?></a>
                        
                    
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