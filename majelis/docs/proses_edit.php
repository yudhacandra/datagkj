<?php
include '../../database.php';
$id = $_GET['id'];
if(isset($_POST['edit']))
{
$nik=$_POST['no_induk'];
$nm=$_POST['nama'];
$jk=$_POST['jenis_kelamin'];
$al=$_POST['alamat'];
$lh=$_POST['lahir'];
$bp=$_POST['baptis'];
$si=$_POST['sidi'];
$ni=$_POST['nikah'];
$men=$_POST['meninggal'];
$ot=$_POST['orang_tua'];
$si=$_POST['suami_istri'];
$dg=$_POST['dari_gereja'];
$kg=$_POST['ke_gereja'];
$ket=$_POST['keterangan'];
$kt=$_POST['keterangan_tambahan'];

$data_jemaat = mysqli_query($conn, "UPDATE `data_induk` SET `no_induk`='$nik',`nama`='$nm',`jenis_kelamin`='$jk',`alamat`='$al',`lahir`='$lh',`baptis`='$bp',`sidi`='$si',`nikah`='$ni',`meninggal`='$men',`orang_tua`='$ot',`suami_istri`='$si',`dari_gereja`='$dg',`ke_gereja`='$kg',`keterangan`='$ket',`keterangan_tambahan`='$kt' WHERE id='$id'");
if ($data_jemaat) {
    header("location:data-jemaat.php");
}

}

$data_jemaat = mysqli_query($conn, "SELECT * FROM `data_induk` where id='$id'");
$data = mysqli_fetch_array($data_jemaat);
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
          </svg> Edit Data Jemaat</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <p><b>Form Edit Data Jemaat </b></p>
            <div class="contact-form-area">
                    <form action="" method="POST" >
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">No Induk:</label>
                                    <input type="text" class="form-control"  value="<?=  $data['no_induk']; ?>" name="no_induk">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Nama:</label>
                                    <input type="text" class="form-control" value="<?=  $data['nama']; ?>"  name="nama">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-number">Jenis Kelamin:</label>
                                    <select name="jenis_kelamin" class="form-control" value="<?=  $data['jenis_kelamin']; ?>" >
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki-laki</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Alamat:</label>
                                    <input type="text" class="form-control" value="<?=  $data['alamat']; ?>"  name="alamat">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-number">Lahir:</label>
                                    <input type="text" class="form-control" value="<?=  $data['lahir']; ?>"  name="lahir">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-email">Baptis:</label>
                                    <input type="text" class="form-control" value="<?=  $data['baptis']; ?>"  name="baptis">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Sidi:</label>
                                    <input type="text" class="form-control" value="<?=  $data['sidi']; ?>"  name="sidi">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-email">Nikah:</label>
                                    <input type="text" class="form-control" value="<?=  $data['nikah']; ?>"  name="nikah">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Meninggal:</label>
                                    <input type="text" class="form-control" value="<?=  $data['meninggal']; ?>"  name="meninggal">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Orang Tua:</label>
                                    <input type="text" class="form-control" value="<?=  $data['orang_tua']; ?>"  name="orang_tua">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Suami/Istri:</label>
                                    <input type="text" class="form-control" value="<?=  $data['suami_istri']; ?>"  name="suami_istri">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Asal Gereja:</label>
                                    <input type="text" class="form-control" value="<?=  $data['dari_gereja']; ?>"  name="dari_gereja">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Tujuan Gereja:</label>
                                    <input type="text" class="form-control" value="<?=  $data['ke_gereja']; ?>"  name="ke_gereja">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Keterangan:</label>
                                    <input type="text" class="form-control" value="<?=  $data['keterangan']; ?>"  name="keterangan">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Keterangan Tambahan:</label>
                                    <input type="text" class="form-control" value="<?=  $data['keterangan_tambahan']; ?>"  name="keterangan_tambahan">
                                </div>
                            </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" name="edit" class="btn btn-info">Simpan</button>
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