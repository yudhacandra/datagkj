<?php

  session_start();
  // jika sudah login ke majelis maka akan masuk ke tampilan majelis

    if (!isset($_SESSION['role'])) {
      echo "<script type='text/javascript'>
      alert('Anda harus login terlebih dahulu!');
      window.location = '../../index.php'
    </script>";
    } else if ($_SESSION['role'] == "Admin") {
      header("location:../admin/docs/dashboard.php");} 
      else{
          $id = $_SESSION['id_majelis'];
    }

?>
    

