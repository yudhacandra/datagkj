<?php
include '../../database.php';
$id = $_GET['id'];
if(isset($_POST['edit_pelayanan_katekisasi']))
{
  $idk=$_POST['id_katekisasi'];
  $pk=$_POST['pemohon_katekisasi'];
  $jnk=$_POST['jenis_katekisasi'];
  $jr=$_POST['jadwal_registrasi'];
  $jk=$_POST['jadwal_katekisasi'];
  $ptk=$_POST['petugas_katekisasi'];
  $kt=$_POST['keterangan'];
  $st=$_POST['status'];


$pelayanan_katekisasi = mysqli_query($conn, "UPDATE `pelayanan_katekisasi` SET `id_katekisasi`='$idk',`pemohon_katekisasi`='$pk',`jenis_katekisasi`='$jnk',`jadwal_registrasi`='$jr',`jadwal_katekisasi`='$jk',`petugas_katekisasi`='$ptk',`keterangan`='$kt',`status`='$st' WHERE id_katekisasi='$id'");
if ($pelayanan_katekisasi) {
    header("location:pelayanan_katekisasi.php");
}

}

$pelayanan_katekisasi = mysqli_query($conn, "SELECT * FROM `pelayanan_katekisasi` where id_katekisasi='$id'");
$data = mysqli_fetch_array($pelayanan_katekisasi);
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
          </svg> Edit Pemohon Pelayanan Katekisasi</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                <p><b><h3><div class="text-center"><u> FORM EDIT PEMOHON PELAYANAN KATEKISASI </u></div></h3></b></p>
            <div class="contact-form-area">
                    <form action="" method="POST" >
                        <div class="row">
                            <div class="col-12 col-lg-10">
                              <div class="form-group">
                                <label for="contact-name"><b>Id Katekisasi :</b></label>
                                <input type="" class="form-control" name="id_katekisasi">
                              </div>
                            </div>

                            <div class="col-12 col-lg-10">
                              <div class="form-group">
                                <label for="contact-name"><b>Pemohon Katekisasi :</b></label>
                                <input type="" class="form-control" name="pemohon_katekisasi">
                              </div>
                            </div>

                            <div class="col-12 col-lg-10">
                              <label class="control-label mt-1"><b>Jenis Katekisasi :</b></label>
                              <select class="form-control col-30" name="jenis_katekisasi">
                                <option value="#"></option>
                                <option value="Katekisasi Baptis">Katekisasi Baptis</option>
                                <option value="Katekisasi Nikah">Katekisasi Nikah</option>
                              </select>
                            </div>

                            <div class="col-12 col-lg-10">
                              <div class="form-group"><p></p>
                                <label for="contact-name"><b>Jadwal Registrasi :</b></label>
                                <input type="date" class="form-control" name="jadwal_registrasi">
                              </div>
                            </div>

                            <div class="col-12 col-lg-10">
                              <div class="form-group">
                                <label for="contact-name"><b>Jadwal Katekisasi :</b></label>
                                <input type="date" class="form-control" name="jadwal_katekisasi">
                              </div>
                            </div>

                            <div class="col-12 col-lg-10">
                              <div class="form-group">
                                <label for="contact-name"><b>Petugas Katekisasi :</b></label>
                                <input type="text" class="form-control" name="petugas_katekisasi">
                              </div>
                            </div>
                            
                            <div class="col-12 col-lg-10">
                              <div class="form-group">
                                <label for="contact-name"><b>Keterangan :</b></label>
                                <input type="text" class="form-control" name="keterangan">
                              </div>
                            </div>

                            <div class="col-12 col-lg-10">
                              <div class="form-group">
                                <label for="contact-name"><b>Status :</b></label>
                                <input type="text" class="form-control" name="status">
                              </div>
                            </div>
                            
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" name="edit_pelayanan_katekisasi" class="btn btn-info">Simpan</button>
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