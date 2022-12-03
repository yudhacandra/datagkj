<?php
include '../../database.php';
$id = $_GET['id'];
if(isset($_POST['edit_pelayan_ibadah']))
{
  $idi=$_POST['id_ibadah'];
  $ni=$_POST['nama_ibadah'];
  $tmp=$_POST['tempat'];
  $jdwi=$_POST['jadwal_ibadah'];
  $peng=$_POST['pengkotbah'];
  $ogn=$_POST['organis'];
  $pn=$_POST['pemandu_nyanyian'];
  $bm=$_POST['bunga_mimbar'];
  $ktg=$_POST['keterangan'];
  $jam_mulai=$_POST['jam_mulai'];
  $jam_akhir=$_POST['jam_akhir'];


$pelayan_ibadah = mysqli_query($conn, "UPDATE `pelayan_ibadah` SET `id_ibadah`='$idi',`nama_ibadah`='$ni',`tempat`='$tmp',`jadwal_ibadah`='$jdwi',`pengkotbah`='$peng',`organis`='$ogn',`pemandu_nyanyian`='$pn',`bunga_mimbar`='$bm',`keterangan`='$ktg',`penanggung_jawab`='$pic',`jam_mulai`='$jam_mulai',`jam_akhir`='$jam_akhir' WHERE id_ibadah='$id'");
if ($pelayan_ibadah) {
    header("location:pelayan_ibadah.php");
}

}

$pelayan_ibadah = mysqli_query($conn, "SELECT * FROM `pelayan_ibadah` where id_ibadah='$id'");
$data = mysqli_fetch_array($pelayan_ibadah);
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
          </svg> Edit Data Pelayan Ibadah</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                <p><b><h3><div class="text-center"><u> FORM EDIT DATA PELAYAN IBADAH </u></div></h3></b></p>
            <div class="contact-form-area">
                    <form action="" method="POST" >
                        <div class="row">
                           
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <input type="hidden" class="form-control"  value="<?=  $data['id_ibadah']; ?>" name="id_ibadah">
                                    <label for="contact-name"><b>Nama Ibadah :</b></label>
                                    <input type="text" class="form-control" value="<?=  $data['nama_ibadah']; ?>"  name="nama_ibadah">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Tempat :</b></label>
                                    <input type="text" class="form-control" value="<?=  $data['tempat']; ?>"  name="tempat">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Tanggal Ibadah :</b></label>
                                    <input type="date" class="form-control" value="<?=  $data['jadwal_ibadah']; ?>"  name="jadwal_ibadah">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Waktu Mulai :</b></label>
                                    <input type="time" class="form-control" value="<?=  $data['jam_mulai']; ?>"  name="jam_mulai">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Waktu Akhir :</b></label>
                                    <input type="time" class="form-control" value="<?=  $data['jam_akhir']; ?>"  name="jam_akhir">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Pengkotbah :</b></label>
                                    <input type="text" class="form-control" value="<?=  $data['pengkotbah']; ?>"  name="pengkotbah">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Organis :</b></label>
                                    <input type="text" class="form-control" value="<?=  $data['organis']; ?>"  name="organis">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Pemandu Nyanyian :</b></label>
                                    <input type="text" class="form-control" value="<?=  $data['pemandu_nyanyian']; ?>"  name="pemandu_nyanyian">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Bunga Mimbar :</b></label>
                                    <input type="text" class="form-control" value="<?=  $data['bunga_mimbar']; ?>"  name="bunga_mimbar">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Keterangan :</b></label>
                                    <input type="text" class="form-control" value="<?=  $data['keterangan']; ?>"  name="keterangan">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Penanggung Jawab :</b></label>
                                    <input type="text" class="form-control" value="<?=  $data['penanggung_jawab']; ?>"  name="penanggung_jawab">
                                </div>
                            </div>
                            
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" name="edit_pelayan_ibadah" class="btn btn-info">Simpan</button>
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