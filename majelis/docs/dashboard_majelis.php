<?php
include '../../database.php';
include 'session-majelis.php';
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
          <h1><i class="fa fa-dashboard"></i> Dashboard Majelis dan Komisi</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard Dashboard Majelis-Komisi</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-address-card-o fa-3x" aria-hidden="true"></i>
            <div class="info">
          <?php
          $data_jemaat = mysqli_query($conn, "SELECT nama, COUNT(no_induk) total FROM `data_induk`;");
            $data = mysqli_fetch_array($data_jemaat);
          ?>
            <h4><b>Jemaat</b></h4>
            <p><b><?=  $data['total']; ?></b></p>
            </div>
          </div>
        </div>

         <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
            <?php
          $data_majelis = mysqli_query($conn, "SELECT nama, COUNT(id_majelis) total FROM `data_majelis`;");
            $data = mysqli_fetch_array($data_majelis);
          ?>
              <h4><b>Majelis</b></h4>
               <p><b><?= $data['total']; ?></b></p>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-6 col-lg-3"> -->
          <!-- <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i> -->
            <!-- <div class="info"> -->
              <!-- <h4>Uploades</h4> -->
              <!-- <p><b>10</b></p> -->
            </div>
          </div>
        </div>
        <!-- <div class="col-md-6 col-lg-3"> -->
          <!-- <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i> -->
            <!-- <div class="info"> -->
              <!-- <h4>Stars</h4> -->
              <!-- <p><b>500</b></p> -->
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