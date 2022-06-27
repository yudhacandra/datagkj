<?php
include 'database.php';
session_start();
if (isset($_POST['daftar'])) {

  $un = $_POST['username'];
  $pass = $_POST['password'];
  $nm = $_POST['nama'];
  $tml = $_POST['tempat_lahir'];
  $tal = $_POST['tanggal_lahir'];
  $almt = $_POST['alamat'];
  $hp = $_POST['no_telp'];
  $sta ='Tidak Aktif' ;
  
  
 
  $pendaftaran =  mysqli_query($conn, "INSERT INTO `admin`(`username`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telpon`, `status`) VALUES ('$un','$pass','$nm','$tml','$tal','$almt','$hp','$sta')");
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
        <h1>Operator GKJ Boyolali</h1>
      </div>
      <div class="login-box " style="height: 820px; width: 700px;">
        <form class="login-form" action="" method="Post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Daftar Akun Admin</h3>
          <div class="form-row">
            <div class="col-12 col-lg-12">
              <label class="control-label mt-1">USERNAME</label>
              <input class="form-control" name="username" type="username"  autofocus>
            </div>

            <div class="col-12 col-lg-12">
              <p></p>
              <label class="control-label mt-1">PASSWORD</label>
              <input class="form-control" name="password" type="password" autofocus>
            </div>

            <div class="col-12 col-lg-12">
              <p></p>
              <label class="control-label mt-1">NAMA</label>
              <input class="form-control" name="nama" name type="nama" autofocus>
            </div>

            <div class="col-12 col-lg-12">
              <p></p>
              <label class="control-label">TEMPAT LAHIR</label>
              <input class="form-control" name="tempat_lahir"  type="tempat_lahir"  autofocus>
            </div>

            <div class="col-12 col-lg-12">
              <p></p>
              <label class="control-label">TANGGAL LAHIR</label>
              <input class="form-control" name="tanggal_lahir" type="date"  autofocus>
            </div>

            <div class="col-12 col-lg-12">
              <p></p>
              <label class="control-label mt-1">ALAMAT</label>
              <textarea row="3" name="alamat" class="form-control" type="alamat"  autofocus> </textarea>
            </div>

            <div class="col-12 col-lg-12">
              <p></p>
              <label class="control-label">NO TELPON</label>
              <input class="form-control" name="no_telp" type="no_telp"  autofocus>
            </div>

            <div class="col-12 col-lg-12">
              <div class="form-group btn-container">
                <p></p>
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