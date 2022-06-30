<?php
session_start();
// jika sudah login ke halaman admin 
if (!isset($_SESSION['role'])) {
} else if ($_SESSION['role'] == "Admin") {
  header("location: admin/docs/dashboard.php");
} else if ($_SESSION['role'] == "Majelis") {
  header("location: majelis/docs/dashboard_majelis.php");
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
    <title>Masuk - GKJ Boyolali Majelis</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Gereja Kristen Jawa Boyolali</h1>
      </div>
      <div class="login-box " style="height: 400px;">
        <form class="login-form" action="">
        <h3 class="login-head"><img src="img/gkj.png" height="60" width="60"> GKJ BOYOLALI</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" id="username" type="text" placeholder="username" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" id="password" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <!-- <input type="checkbox"><span class="label-text">Tetap Masuk</span> -->
                </label>
              </div>
              <!-- <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Lupa Password ?</a></p> -->
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block btn-login"><i class="fa fa-sign-in fa-lg fa-fw"></i>Masuk</button>
            <!-- <a href="signup_majelis.php"class="btn btn-primary btn-block mt-2"><i class="fa fa-sign-in fa-lg fa-fw"></i>Daftar Majelis</a> -->
            <!-- <a href="signup_admin.php"class="btn btn-primary btn-block mt-2"><i class="fa fa-sign-in fa-lg fa-fw"></i>Daftar Admin</a> -->
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <!-- <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Lupa Password?</h3> -->
          <!-- <div class="form-group"> -->
            <!-- <label class="control-label">EMAIL</label> -->
            <!-- <input class="form-control" type="text" placeholder="Email"> -->
          <!-- </div> -->
          <!-- <div class="form-group btn-container"> -->
            <!-- <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button> -->
          <!-- </div> -->
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="login-majelis.php" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
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


        // Mengecek username di isi atau kosong
        if (username.length == "") {

          Swal.fire({
            icon: 'error',
            title: 'Gagal...!',
            text: 'Username wajib diisi!'
          });

          // Mengecek password di isi atau kosong
        } else if (password.length == "") {

          Swal.fire({
            icon: 'error',
            title: 'Gagal...',
            text: 'Password wajib diisi!'
          });

        } else {
          // Jika semua form benar akan memulai memproses
          $.ajax({
            url: "aksi.php", //Url untuk mengelolah data
            type: "POST", //Method untuk mengelolah data
            data: {
              // Mengirimkan data ke URL
              "username": username,
              "password": password
            },
            // Jika response berhasil maka fungsi akan berjalan
            success: function(response) {
                // Jika login sebagai Admin 
              if (response == "Majelis") {

                iziToast.success({
                  title: 'Selamat',
                  message: 'Anda berhasil login sebagai Majelis GKJ BOYOLALI',
                  position: 'topRight'
                });
                setTimeout(function() {
                  window.location.href = "majelis/docs/dashboard_majelis.php";
                }, 4500);


              } else if (response == "Admin") {

                iziToast.success({
                title: 'Selamat',
                message: 'Anda berhasil login sebagai Admin GKJ BOYOLALI',
                position: 'topRight'
                });
                setTimeout(function() {
                window.location.href = "admin/docs/dashboard.php";
                }, 4500);
							
				      }else if (response == "Tidak Aktif") {
                // Jika error/akun sudah off
                iziToast.warning({
                  title: 'Maaf...!',
                  message: 'Akun Anda Sudah Tidak Aktif',
                  position: 'topRight'
                });

              } else {
                // Jika error/akun sudah off
                iziToast.error({
                  title: 'Maaf...!',
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