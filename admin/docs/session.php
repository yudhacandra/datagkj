<?php

  session_start();
  // jika sudah login ke admin maka akan di teruskan ke halaman admin
    if (!isset($_SESSION['role'])) {
      echo "<script type='text/javascript'>
      alert('Anda harus login terlebih dahulu!');
      window.location = '../../index.php'
    </script>";
    }else if ($_SESSION['role'] == "Majelis") {
      header("location:../majelis/docs/dashboard_majelis.php");} 
      else{
      $id = $_SESSION['id_admin'];
      }
?>