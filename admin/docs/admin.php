<?php
include '../../database.php';
  ##$alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';


if (isset($_POST['cari'])) {
$cari = $_POST['cari1'];

if ($cari != null) {

  $admin = mysqli_query($conn, "SELECT * FROM `admin` where `nama` like '%$cari%' or `id` like '%$cari%' ");
  $data = mysqli_fetch_array($admin);
} else {
  $admin = mysqli_query($conn, "SELECT * FROM `admin` ");
  $data = mysqli_fetch_array($admin);
  
}

} else {
  $admin = mysqli_query($conn, "SELECT * FROM `admin` ");
  $data = mysqli_fetch_array($admin);
  
}



$cek = mysqli_num_rows($admin);
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
          <h1><i class="fa fa-id-badge" aria-hidden="true"></i></i> Data Admin GKJ Boyolali</h1>
          <p>Data Admin Gereja GKJ Boyolali</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-dashboard"></a></i></li>
          <li class="breadcrumb-item">Admin</li>
        </ul>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
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
                      <th rowspan="2">Id</th>
                      <th rowspan="2">Username</th>
                      <th rowspan="5">Password</th>
                      <th rowspan="2">Nama</th>
                      <th rowspan="2">Tempat Lahir</th>
                      <th rowspan="2">Tanggal Lahir</th>
                      <th rowspan="2">Alamat</th>
                      <th rowspan="2">No Telpon</th>
                      <th rowspan="2">Tanggal Registrasi</th>
                      <th rowspan="2">Status</th>
                    </tr>

                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($admin as $row) : ?>
                    <tr>
                      <td><a href="proses_edit_admin.php?id=<?= $row["id"]; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" title="Edit"></i></td>
                      <td><?= $row["id"]; ?></td>
                      <td><?= $row["username"]; ?></td>
                      <td><?= $row["password"]; ?></td>
                      <td><?= $row["nama"]; ?></td>
                      <td><?= $row["tempat_lahir"]; ?></td>
                      <td><?= $row["tanggal_lahir"]; ?></td>
                      <td><?= $row["alamat"]; ?></td>
                      <td><?= $row["no_telpon"]; ?></td>
                      <td><?= $row["tanggal_registrasi"]; ?></td>
                      <td><?= $row["status"]; ?></td>
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