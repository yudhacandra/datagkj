<?php
include '../../database.php';
 #$alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';

$id__ = $_GET['id'];
  $data_jemaat = mysqli_query($conn, "SELECT * FROM `data_jemaat` where `jabatan` = '$id__'");
  $data = mysqli_fetch_array($data_jemaat);
  
$cek = mysqli_num_rows($data_jemaat);
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
          <h1><i class="fa fa-address-card" aria-hidden="true"></i> Data Jemaat GKJ Boyolali</h1>
          <p>Master Data Jemaat GKJ Boyolali</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-dashboard"></a></i></li>
          <li class="breadcrumb-item">Data Jemaat</li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
              <div style="height: 600px;overflow: scroll;">
                <table class=" table-hover table-bordered" >
                  <thead>
                    <tr>
                      <th rowspan="2">No Induk</th>
                      <th rowspan="2">Nama</th>
                      <th rowspan="2">Jenis Kelamin</th>
                      <th rowspan="2">Alamat</th>
                      
                    </tr>
                    
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($data_jemaat as $row) : ?>
                    <tr>
                      <td><?= $row["no_induk"]; ?></td>
                      <td><?= $row["nama"]; ?></td>
                      <td><?= $row["jenis_kelamin"]; ?></td>
                      <td><?= $row["alamat"]; ?></td>
                      
                    </td>
                    </tr>
                    

                    <?php $i++; ?>
                    <?php endforeach; 
                  
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

  </body>
</html>