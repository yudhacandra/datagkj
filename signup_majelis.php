<?php
include 'database.php';
session_start();
if (isset($_POST['daftar'])) {

//$idm=$_POST['id_majelis'];
$nam=$_POST['nama'];
$usrnm=$_POST['username'];
$jbm=$_POST['jabatan_majelis'];
// $tr=$_POST['tanggal_registrasi'];
$notel=$_POST['no_telpon'];
$psw=$_POST['password'];
$st='Tidak Aktif';

  
  
 
  $pendaftaran =  mysqli_query($conn, "INSERT INTO `data_majelis`(`nama`, `username`, `jabatan_majelis`, `no_telpon`, `password`, `status`) VALUES ('$nam','$usrnm','$jbm','$notel','$psw','$st')");
  if ($pendaftaran){
    echo 'alert(Data Berhasil di tambahkan!)';
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="admin/docs/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="iziToast.min.css">
  <link href="sweetalert2.min.css" rel="stylesheet">
    <title>Masuk - GKJ Boyolali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Gereja Keristen Jawa Boyolali</h1>
      </div>
      <div class="login-box " style="height: 650px; width: 700px;">
        <form class="login-form" action="" method="Post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Daftar Akun Majelis</h3>
          <div class="form-row">
          
            <div class="col-12 col-lg-10">
              <div class="form-group">
                <label for="contact-name"><b>Nama  Majelis:</b></label>
                <input type="text" class="form-control" name="nama">
              </div>
            </div>

            <div class="col-12 col-lg-10">
              <div class="form-group">
                <label for="contact-name"><b>Username :</b></label>
                <input type="text" class="form-control" name="username">
              </div>
            </div>
            
            <div class="col-12 col-lg-10">
                <label class="control-label mt-1">Jabatan Majelis</label>
                <select class="form-control col-30" name="jabatan_majelis">
                  <option value="#"></option>
                  <option value="ketua">ketua</option>
                  <option value="wakil ketua">Wakil Ketua</option>
                  <option value="Sekretaris">Sekretaris</option>
                  <option value="Bendahara">Bendahara</option>
                  <option value="Bidang KEESAAN">Bidang KEESAAN</option>
                  <option value="Bidang PIWG">Bidanng PIWG</option>
                  <option value="Bidang KESPEL">Bidanng KESPEL</option>
                  <option value="Bidang Penata Layanan">Bidanng Penata Layanan</option>
                  <option value="Bidang Kajian">Bidanng Kajian</option>
                  <option value="Bidang Pembangunan">Bidanng Pembangunan</option>
                </select>
              </div>

            <div class="col-12 col-lg-10">
              <div class="form-group"><p></p>
                <label for="contact-name"><b>No Telpon  :</b></label>
                <input type="text" class="form-control" name="no_telpon">
              </div>
            </div>
                            
            <div class="col-12 col-lg-10">
              <div class="form-group">
                <label for="contact-name"><b>Password :</b></label>
                <input type="text" class="form-control" name="password">
              </div>
            </div>
              
            </div>
            <div class="form-group mt-4 btn-container">
              <button type="submit" name="daftar" class="btn btn-primary btn-block "><i class="fa fa-sign-in fa-lg fa-fw"></i>Daftar</button>
              <a href="login-majelis.php"class="btn btn-primary btn-block mt-2"><i class="fa fa-sign-in fa-lg fa-fw"></i>Masuk</a>
            </div>
          </div>

            



        </form>
      
      </div>
    </section>


    <!-- Essential javascripts for application to work-->
    <script src="admin/docs/js/jquery-3.3.1.min.js"></script>
    <script src="admin/docs/js/popper.min.js"></script>
    <script src="admin/docs/js/bootstrap.min.js"></script>
    <script src="admin/docs/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="sweetalert2.min.js"></script>
  <script type="text/javascript" src="iziToast.min.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="admin/docs/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>

<script>
    $(document).ready(function() {

      // Membuat function login_proses
      function login_proses() {
        var username = $("#username").val();
        var password = $("#password").val();


        // Mengecek username di isi atau tidak
        if (username.length == "") {

          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Field Username wajib diisi!'
          });

          // Mengecek password di isi atau tidak
        } else if (password.length == "") {

          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Field Password wajib diisi!'
          });

        } else {
          // Jika semua form terisi maka ajax akan memulai memproses data
          $.ajax({
            url: "aksi.php", //Url untuk mengelolah data
            type: "POST", //Method untuk mengelolah data
            data: {
              // Mengirimkan data ke URL
              "username": username,
              "password": password
            },
            // Jika response nya sukses atau berhasil maka fungsi ini akan berjalan
            success: function(response) {
              // Jika ia sebagai admin 
            
              } else if (response == "Tidak Aktif") {
                // Jika response nya error maka fungsi ini yang akan berjalan
                iziToast.warning({
                  title: 'Oops..!',
                  message: 'Maaf Akun Anda Tidak Aktif',
                  position: 'topRight'
                });

              } else {
                // Jika response nya error maka fungsi ini yang akan berjalan
                iziToast.error({
                  title: 'Oops..!',
                  message: 'Username atau Password Anda Salah!',
                  position: 'topRight'
                });

              }
              console.log(response);
            },
            // Jika ajax nya error/bermasalah maka fungsi ini yang akan berjalan
            error: function(response) {

              Swal.fire({
                icon: 'error',
                title: 'Opps!',
                text: 'Terjadi kesalahan pada server!'
              });

              console.log(response);
            }
          });
        }
      }

      // jika button yang class nya btn-login di click maka akan menjalan kan fungsi login_proses
      $(".btn-login").click(function() {
        login_proses();
      });

    });
  </script>
</body>


  </body>
</html>