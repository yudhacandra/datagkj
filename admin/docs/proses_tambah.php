<?php
include '../../database.php';
if(isset($_POST['simpan']))
{
    $ni=$_POST['no_induk'];
    $nm=$_POST['nama'];
    // $jbt=$_POST['jabatan'];
    $jk=$_POST['jenis_kelamin'];
    $al=$_POST['alamat'];
    $lh=$_POST['lahir'];
    $bp=$_POST['baptis'];
    $sd=$_POST['sidi'];
    $st=$_POST['status'];
    $nkh=$_POST['nikah'];
    $mng=$_POST['meninggal'];
    $ot=$_POST['orang_tua'];
    $si=$_POST['suami_istri'];
    $dg=$_POST['dari_gereja'];
    $kg=$_POST['ke_gereja'];
    $ket=$_POST['keterangan'];
    $tt=$_POST['tanggal_terdaftar'];
    $kt=$_POST['keterangan_tambahan'];
    $_komisi=$_POST['status_komisi'];

$insert = mysqli_query($conn,"INSERT INTO `data_jemaat`(`no_induk`, `nama`, `jabatan`, `jenis_kelamin`, `alamat`, `lahir`, `baptis`, `sidi`, `nikah`,`meninggal`, `orang_tua`, `suami_istri`, `dari_gereja`, `ke_gereja`, `keterangan`, `tanggal_terdaftar`, `keterangan_tambahan`,`Id_komisi`) VALUES ('$ni','$nm','$st','$jk','$al','$lh','$bp','$sd','$nkh','$mng','$ot','$si','$dg','$kg','$ket','$tt','$kt','$_komisi')");
if($insert){ 

  // $alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';
  header("location:data_jemaat.php");
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
            <p><b><h3> <div class="text-center"> FORM TAMBAH DATA JEMAAT </div></h3></b></p>

            <div class="contact-form-area">
                    <form action="" method="POST" >
                    <p><b><a><div class="text">*Semua Data Wajib Diisi</div></a></b></p>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name"><b>No Induk*</b></label>
                                    <input type="text" class="form-control" id="contact-name" name="no_induk">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Nama  :*</b></label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Jenis Kelamin</b></label>
                                    <select name="jenis_kelamin" class="form-control">
                                    <option value=""></option>
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki-laki</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Alamat</b></label>
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-number"><b>Tempat dan Tanggal Lahir* (dd/mm/yyyy)</b></label>
                                    <input type="text" class="form-control" name="lahir">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Tanggal Baptis* (dd/mm/yyyy)</b></label>
                                    <input type="text" class="form-control" name="baptis">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Tanggal Sidi (dd/mm/yyyy)</b></label>
                                    <input type="text" class="form-control" name="sidi">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Tanggal Nikah (dd/mm/yyyy)</b></label>
                                    <input type="text" class="form-control" name="nikah">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Tanggal Meninggal (dd/mm/yyyy)</b></label>
                                    <input type="text" class="form-control" name="meninggal">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Nama Orang Tua</b></label>
                                    <input type="text" class="form-control" name="orang_tua">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Nama Suami atau Istri</b></label>
                                    <input type="text" class="form-control" name="suami_istri">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Gereja Asal</b></label>
                                    <input type="text" class="form-control" name="dari_gereja">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Tujuan Gereja</b></label>
                                    <input type="text" class="form-control" name="ke_gereja">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Keterangan</b></label>
                                    <input type="text" class="form-control" name="keterangan">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Tanggal Terdaftar* (dd/mm/yyyy)</b></label>
                                    <input type="date" class="form-control" name="tanggal_terdaftar">
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Wilayah</b></label>
                                    <input type="text" class="form-control" name="keterangan_tambahan">
                                    <!-- <textarea col="3" cols="30" class="form-control" rows="3" name="keterangan_tambahan"></textarea> -->
                                </div>
                            </div>
                            <!--<div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Jabatan Gerejawi  :</b></label>
                                    <select name="status" id="">
                                        <option value="">Belum Ada</option>
                                        <?php
                                        $tampilkan_data_struktur_majelis = mysqli_query ($conn,"SELECT * FROM `struktur_majelis`");
                                        while ($ambil_data = mysqli_fetch_array ($tampilkan_data_struktur_majelis)){ ?>
                                            <option value="<?= $ambil_data['id_struktur']?>"><?= $ambil_data['idjabatan_majelis']?></option>
                            
                                       <?php  }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="form-group">
                                    <label for="contact-name"><b>Komisi  :</b></label>
                                    <select name="status_komisi" id="">
                                        <option value="">Belum Ada</option>
                                        <?php
                                        $tampilkan_data_struktur_komisi = mysqli_query ($conn,"SELECT * FROM `struktur_komisi`");
                                        while ($ambil_data_komisi = mysqli_fetch_array ($tampilkan_data_struktur_komisi)){ ?>
                                            <option value="<?= $ambil_data_komisi['id_komisi']?>"><?= $ambil_data_komisi['idnama_komisi']?></option>
                            
                                       <?php  }
                                        ?>
                                    </select>
                                </div>
                            </div>-->
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