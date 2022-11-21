<?php
include '../../database.php';
$hapus =$_GET['idmajelis'];
$id = $_GET['id'];
if(isset($_POST['hapus']))
{
  $hps = $_POST['jbt']='';
$struktur_majelis = mysqli_query($conn, "UPDATE `data_jemaat` SET `jabatan` = '$hps' WHERE `data_jemaat`.`no_induk` = '$hapus'");
header("location:proses_lihat_majelis.php?id=$id");
}
          ?>