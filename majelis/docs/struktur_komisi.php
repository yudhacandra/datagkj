<?php
  include '../../database.php';
  ##$alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';

  include 'session-majelis.php';
  $struktur_majelis = mysqli_query($conn, "SELECT * FROM `data_majelis` where id_majelis ='$id'");
  $data = mysqli_fetch_array($struktur_majelis);
  $ambi_jbt =$data['komisi'];
  $struktur_komisi= mysqli_query($conn, "SELECT * FROM `struktur_komisi` where id_komisi ='$ambi_jbt'");
  $data_komisi = mysqli_fetch_array($struktur_komisi);
  
  if (isset($_POST['cari'])) {
    $cari = $_POST['cari1'];
    
    if ($cari != null) {
    
      $data_jemaat = mysqli_query($conn, "SELECT * FROM `data_jemaat` where `nama` like '%$cari%' or `no_induk` like '%$cari%' or jabatan='$ambi_jbt' ");
      // $data = mysqli_fetch_array($struktur_majelis);
    } else {
     
      $data_jemaat = mysqli_query($conn, "SELECT * FROM `data_jemaat` WHERE jabatan='$ambi_jbt';");
      
    }
    
  } else {
    
    $data_jemaat = mysqli_query($conn, "SELECT * FROM `data_jemaat` WHERE id_komisi='$ambi_jbt'");
    
  }$cek = mysqli_num_rows($data_jemaat);
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
          <p>Anggota 
            <?php 
            if ($data_komisi['id_komisi'] = NULL) { ?>
              <?= $data_komisi['idnama_komisi']; ?>
          <?php  } else {
              echo "";
            }
            ?>
            <!-- <?= $data_komisi['idnama_komisi']; ?>  -->
            Gereja GKJ Boyolali</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_majelis.php"><i class="fa fa-dashboard"></a></i></li>
          <li class="breadcrumb-item">Anggota 
          <?php 
            if ($data_komisi['idnama_komisi'] = NULL) {
              echo  $data_komisi['idnama_komisi'];
            }
            ?> </li>
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
              <!-- <a href="proses_tambah_struktur_komisi.php" class="btn btn-info ml-2"><i class="app-menu__icon fa fa-plus" aria-hidden="true"></i></a> -->
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
                  
                    } else { 
                  ?>
              
                  <thead>
                    <tr>
                    <th rowspan="2">No Induk</th>
                    <th rowspan="2">Nama Anggota</th>
                    <th rowspan="2">Tugas dan Tanggung Jawab</th>
                    </tr>

                  </thead>
                  <tbody>
                  <?php 
                  
                  $i = 1; ?>
                  <?php foreach ($data_jemaat as $row) : ?>
                    <tr>
                    
                      <td>
                        <?= $row["no_induk"]; ?>
                      </td>
                      <td>
                        <?= $row["nama"]; ?>
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