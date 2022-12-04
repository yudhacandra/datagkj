<?php
include '../../database.php';
if(isset($_POST['simpan']))
{
$idp=$_POST['id_proker'];
$bdg=$_POST['bidang'];
$np=$_POST['nama_proker'];
$jk=$_POST['jenis_kegiatan'];
$wkt=$_POST['waktu'];
$ket=$_POST['keterangan'];

$insert = mysqli_query($conn,"INSERT INTO `proker`(`id_proker`, `bidang`, `nama_proker`, `jenis_kegiatan`, `waktu`, `keterangan`) VALUES ('$idp','$bdg','$np','$jk','$wkt','$ket')");
if($insert){ 
  // $alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';
  header("location:proker.php");
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
          </svg> Tambah Program Kerja Tahunan</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <p><b><h3> <div class="text-center"><u> FORM TAMBAH PROGRAM KERJA TAHUNAN </u></div></h3></b></p>
          
            <div class="contact-form-area">
                    <form action="" method="POST" >
                      <div class="row">
                        <div class="col-12 col-lg-10">
                              <label class="control-label mt-1"><b>Bidang :</b></label>
                              <select class="form-control col-30" name="bidang">
                                <option value="#"></option>
                                <option value="ketua">ketua</option>
                                <option value="wakil ketua">Wakil Ketua</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Bidang KEESAAN">Bidang KEESAAN</option>
                                <option value="Bidang PIWG">Bidang PIWG</option>
                                <option value="Bidang KESPEL">Bidang KESPEL</option>
                                <option value="Bidang Penata Layanan">Bidang Penata Layanan</option>
                                <option value="Bidang Kajian">Bidang Kajian</option>
                                <option value="Bidang Pembangunan">Bidang Pembangunan</option>
                                <option value="komisi Ibadah">komisi Ibadah</option>
                                <option value="Komisi PAK dan Pendidikan">Komisi PAK dan Pendidikan</option>
                                <option value="Komisi Anak">Komisi Anak</option>
                                <option value="Komisi Pemuda dan Remaja">Komisi Pemuda dan Remaja</option>
                                <option value="Komisi Keluarga Muda">Komisi Keluarga Muda</option>
                                <option value="Komisi Keluarga Dewasa">Komisi Keluarga Dewasa</option>
                                <option value="Komisi Adiyuswa">Komisi Adiyuswa</option>
                                <option value="Komisi SBKM">Komisi SBKM</option>
                                <option value="Komisi PEJ">Komisi PEJ</option>
                                <option value="Komisi Pralenan">Komisi Pralenan</option>
                                <option value="Komisi Rumah Tangga dan Inventaris Gereja">Komisi Rumah Tangga dan Inventaris Gereja</option>
                                <option value="Pengurus PAUD">Pengurus PAUD</option>
                                <option value="Pengurus Perpustakaan">Pengurus Perpustakaan</option>
                                <option value="Tim Multimedia">Tim Multimedia</option>
                                <option value="Tim Pengurangan Resiko Bencana">Tim Pengurangan Resiko Bencana</option>
                                <option value="Tim Rip dan Renop">Tim Rip dan Renop</option>
                                <option value="Panitia Pembangunan dan Renovasi Gedung Gereja">Panitia Pembangunan dan Renovasi Gedung Gereja</option>
                              </select>
                            </div>

                            <div class="col-12 col-lg-10">
                              <div class="form-group"><p></p>
                                <label for="contact-name"><b>Nama  Program :</b></label>
                                <input type="text" class="form-control" name="nama_proker">
                              </div>
                            </div>

                            <div class="col-12 col-lg-10">
                              <div class="form-group">
                                <label for="contact-name"><b>Jenis Kegiatan :</b></label>
                                <input type="text" class="form-control" name="jenis_kegiatan">
                              </div>
                            </div>

                            <div class="col-12 col-lg-10">
                              <div class="form-group">
                                <label for="contact-name"><b>Waktu  :</b></label>
                                <input type="text" class="form-control" name="waktu">
                              </div>
                            </div>

                            <div class="col-12 col-lg-10">
                              <div class="form-group">
                                <label for="contact-name"><b>Keterangan :</b></label>
                                <input type="text" class="form-control" name="keterangan">
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