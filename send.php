<?php
 include 'database.php';
  if(isset($_POST['kirim_'])){
    $email = $_POST['email_penerima'];
    $subjek = $_POST['subjek'];
    $isipesan = $_POST['pesan'];

  $mailto = "gkjboyolaliofficial@gmail.com";
  $headers = "From: " . $email;
  $text = " Hai ADMIN, Anda mendapatkan pesan email dari " . $email . ".\n\n" . $isipesan;
  mail($mailto, $subjek, $text, $headers);

    $berhasil_ = mysqli_query ($conn,"INSERT INTO `email`(`email`, `subject`, `pesan`) VALUES ('$email','$subjek','$isipesan')");
  header('location: index.php');
}


?>