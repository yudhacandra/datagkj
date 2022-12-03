<?php
include '../../database.php';
$id = $_GET['id'];
if(isset($_POST['edit_akun_majelis']))
{
$idm=$_POST['id_majelis'];
$nam=$_POST['nama'];
$usrnm=$_POST['username'];
$jbg=$_POST['status2'];
$psw=$_POST['password'];
$st=$_POST['status'];
$data_majelis = mysqli_query($conn, "UPDATE `data_majelis` SET `nama`='$nam',`username`='$usrnm',`jabatan_majelis`='$jbg',`password`='$psw',`status`='$st' WHERE id_majelis='$id'");

if ($data_majelis) {
    header("location:akun_majelis.php");
}

}

$akun_majelis = mysqli_query($conn, "SELECT * FROM `data_majelis` where id_majelis='$id'");
$data = mysqli_fetch_array($akun_majelis);
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
          </svg> Edit Akun Majelis</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                <p><b><h3><div class="text-center"><u> FORM EDIT AKUN MAJELIS </u></div></h3></b></p>
            <div class="contact-form-area">
                    <form action="" method="POST" >
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <div class="form-group">
                                    <!-- <label for="contact-name"><b>Id Majelis :</b></label> -->
                                    <input type="hidden" class="form-control"  value="<?=  $data['id_majelis']; ?>" name="id_majelis" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                            <div class="form-group">
                                <label for="contact-name"><b>Pilih Jemaat :</b></label>
                                <select name="majelis" id="">
                                        <option value="">Belum Ada</option>
                                        <?php
                                        $tampilkan_data_jemaat = mysqli_query ($conn,"SELECT * FROM `data_jemaat`");
                                        while ($ambil_data_jemaat = mysqli_fetch_array ($tampilkan_data_jemaat)){ ?>
                                            <option value="<?= $ambil_data_jemaat['no_induk']?>"><?= $ambil_data_jemaat['nama']?></option>
                                       <?php  }
                                        ?>
                                    </select>
                                    
            
                              </div>
                            </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Username   :</b></label>
                                    <input type="text" class="form-control" value="<?=  $data['username']; ?>"  name="username">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Password   :</b></label>
                                    <input type="text" class="form-control" value="<?=  $data['password']; ?>"  name="password">
                                </div>
                            </div>
                            
                            <div class="col-12 col-lg-10">
                                <label class="control-label mt-1">Jabatan Grejawi</label>
                                <select name="status2" id="">
                                        <option value="">Belum Ada</option>
                                        <?php
                                        $tampilkan_data_struktur_majelis = mysqli_query ($conn,"SELECT * FROM `struktur_majelis`");
                                        while ($ambil_data = mysqli_fetch_array ($tampilkan_data_struktur_majelis)){ ?>
                                            <option value="<?= $ambil_data['id_struktur']?>"><?= $ambil_data['idjabatan_majelis']?></option>
                                       <?php  }
                                        ?>
                                    </select>
                                </select>
                            </div>
                            
                            <div class="col-12 col-lg-3">
                                <div class="form-group"><p></p>
                                    <label for="contact-name"><b>Status :</b></label>
                                    <select class="form-control col-13" name="status">
                                        <option value="#">~ Silahkan Pilih ~</option>
                                        <option value="aktif">Aktif</option>
                                        <option value="tidak aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" name="edit_akun_majelis" class="btn btn-info">Simpan</button>
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