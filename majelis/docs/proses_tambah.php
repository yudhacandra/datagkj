<?php
include '../../database.php';
if(isset($_POST['simpan']))
{
$ni=$_POST['noinduk'];
$nj=$_POST['nama_jemaat'];
$jk=$_POST['jeniskelamin'];
$at=$_POST['alamat_tinggal'];
$dl=$_POST['datalahir'];
$bo=$_POST['baptis_oleh'];
$so=$_POST['sidi_oleh'];
$no=$_POST['nikah_oleh'];
$mo=$_POST['meninggal_oleh'];
$ot=$_POST['orangtua'];
$si=$_POST['suamiistri'];
$ag=$_POST['asalgereja'];
$tg=$_POST['tujuangereja'];
$ke=$_POST['ket'];
$kt=$_POST['ketambahan'];

$insert = mysqli_query($conn,"INSERT INTO `data_induk`(`no_induk`, `nama`, `jenis_kelamin`, `alamat`, `lahir`, `baptis`, `sidi`, `nikah`, `meninggal`, `orang_tua`, `suami_istri`, `dari_gereja`, `ke_gereja`, `keterangan`, `keterangan_tambahan`) VALUES ('$ni','$nj','$jk','$at','$dl','$bo','$so','$no','$mo','$ot','$si','$ag','$tg','$ke','$kt')");
if($insert){ 
  // $alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';
  header("location:data-jemaat.php");
  }
}





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
          <h1><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
           <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
          </svg> Tambah Data Jemaat</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <p><b>Form Tambah Data Jemaat </b></p>

            <div class="contact-form-area">
                    <form action="" method="POST" >
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">No Induk:</label>
                                    <input type="text" class="form-control" id="contact-name" name="noinduk">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Nama:</label>
                                    <input type="text" class="form-control" name="nama_jemaat">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-number">Jenis Kelamin:</label>
                                    <select name="jeniskelamin" class="form-control">
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki-laki</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Alamat:</label>
                                    <input type="text" class="form-control" name="alamat_tinggal">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-number">Lahir:</label>
                                    <input type="text" class="form-control" name="datalahir">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-email">Baptis:</label>
                                    <input type="text" class="form-control" name="baptis_oleh">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Sidi:</label>
                                    <input type="text" class="form-control" name="sidi_oleh">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-email">Nikah:</label>
                                    <input type="text" class="form-control" name="nikah_oleh">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Meninggal:</label>
                                    <input type="text" class="form-control" name="meninggal_oleh">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Orang Tua:</label>
                                    <input type="text" class="form-control" name="orangtua">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Suami/Istri:</label>
                                    <input type="text" class="form-control" name="suamiistri">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Asal Gereja:</label>
                                    <input type="text" class="form-control" name="asalgereja">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Tujuan Gereja:</label>
                                    <input type="text" class="form-control" name="tujuangereja">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Keterangan:</label>
                                    <input type="text" class="form-control" name="ket">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Keterangan Tambahan:</label>
                                    <input type="text" class="form-control" name="ketambahan">
                                </div>
                            </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" name="simpan" class="btn btn-info">Tambah</button>
                            </div>

                        </div>
                    </form>
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