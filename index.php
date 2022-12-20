<?php
session_start();
if (!isset($_SESSION['role'])) {
} else if ($_SESSION['role'] == "Admin") {
  header("location: ./admin/docs/dashboard.php");
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>GKJ Boyolali</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        table {
            width: 100%;
            text-align: center;
        }

        th {
            position: sticky;
            top: 0;
             background-color: #009688;
             color: #fff;
            padding: 12px 20px;
            text-align: center;
            text-transform: capitalize;
            font-family: 'PT Sans', sans-serif;
            font-size: 9pt;
          
        }

        thead{
            position: sticky;
            top: 0;
        }

        td {
      background-color:#DCDCDC;
      color: #000;
      text-align: center;
      border: #fff;
      padding: 15px;
      box-shadow: 2px 2px 5px #000000;
      font-family: 'Poppins', sans-serif;

    }

    .contoh {
        font-family:'Times New Roman';
        font-size: 16pt;
        color: white;
        background-color: #009688;
        
    }

     
    </style>
  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo_gkj.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="page-scroll" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#warta">Warta</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#Jemaat">Jemaat</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#Ibadah">Ibadah</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="#Keuangan">Keuangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-scroll" href="login-majelis.php">Login</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="page-scroll" href="#contact">Kontak</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">GEREJA KRISTEN JAWA <br> BOYOLALI</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311 </p>
              
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="warta" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Warta</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Silahkan anda dapat mendownload warta di bawah ini <br>" Klik Download Pada Ikon Download "<br>
          <form action="" method="POST" id="form_id">
          <select name="datepilih"  onChange="document.getElementById('form_id').submit();">
         <option value="">Silahkan pilih tanggal</option>
         <?php
       include "database.php";
       $date = mysqli_query($conn, "SELECT * FROM `warta`GROUP by tanggal"); 
        while ($tanggal = mysqli_fetch_array($date)) { 
         
          ?>
          <option value="<?= $tanggal['tanggal']; ?>"><?= $tanggal['tanggal']; ?></option>
      <?php  } ?>
        </select>
        </form>
        <a href="./">Reset</a>
        </p>
        </div>

        <div class="row">
        <?php
        include 'database.php';
        error_reporting(E_ALL ^ E_NOTICE);
        
        $keuangan = mysqli_query($conn, "SELECT * FROM `keuangan` order by `jadwal` desc");
        $dat_a = mysqli_fetch_array($keuangan);
        $pelayan_ibadah = mysqli_query($conn, "SELECT * FROM `pelayan_ibadah` ");
       $data_ibadah = mysqli_fetch_array($pelayan_ibadah);
        $data_jemaat_ = mysqli_query($conn, "SELECT * FROM `data_jemaat` 
        ");
        $data_tampil= mysqli_fetch_array($data_jemaat_);
        if(isset($_POST['datepilih'])){
          $data_jemaat = mysqli_query($conn, "SELECT * FROM `warta` where tanggal='".$_POST['datepilih']."' ORDER BY tanggal limit 3");
        } else {
          $data_jemaat = mysqli_query($conn, "SELECT * FROM `warta` ORDER BY tanggal limit 3");
        }
        while ($data = mysqli_fetch_array($data_jemaat))
        {
        ?>

          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
              <a href="admin/docs/download.php?filename=<?= $data['warta_gereja'];?>"><i class="lnr lnr-download"></i></a>
              </div>
              <h6><?= $data['judul'];?></h6>
              <p><?= $data['tanggal'];?></p>
            </div>
          </div>
          <?php }
        ?>
          
        </div>
      </div>
    </section>
<p></p><p></p>
    <section id="Jemaat" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Data Jemaat</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Data Jemaat<br>Gereja Kristen Jawa Boyolali</br></p>
        </div>

        <div class="row">
          <div>
          <input type="text" name="search" id="search" class="mb-1 shadow text-danger" placeholder="  Search No Induk"></input>
          </div>
        <div style="height: 600px;overflow: scroll;Width: 100% ">
        <table  class="table table-striped table-bordered" id="employee_table">
        <thead class="bg-success text-light table-hover table-bordered">
                    <tr>
                      <th>No Induk</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Wilayah</th>

                    </tr>
                    
                  </thead>
  <tbody>
  <?php $i = 1; ?>
  <?php foreach ($data_jemaat_ as $row) : ?>
  <tr>
  <td><?= $row["no_induk"]; ?></td>
  <td><?= $row["nama"]; ?></td>
  <td><?= $row["jenis_kelamin"]; ?></td>
  <td><?= $row["alamat"]; ?></td>
  <td><?= $row["keterangan_tambahan"]; ?></td>
                      
                    </tr>
  </tbody>
  <?php $i++; ?>
                    <?php endforeach; 
                  
                  ?>
</table>
      </div>
      </div>
    </section>



    <section id="Ibadah" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Jadwal Ibadah</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Jadwal Ibadah<br>Gereja Kristen Jawa Boyolali</br></p>
        </div>

        <div class="row">
        <table class="table">
  <thead class="bg-primary text-light">
    <tr>
      <th>Nama Ibadah</th>
      <th>Tempat</th>
      <th>Tanggal</th>
      <th>Waktu Mulai</th>
      <th>Pengkotbah</th>
      <th>Organis</th>
      <th>PNJ</th>
      <th>Bunga Mimbar</th>
      <th>Penanggung Jawab</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
                  <?php foreach ($pelayan_ibadah as $row) : ?>
                    <tr>
                      <td><?= $row["nama_ibadah"]; ?></td>
                      <td><?= $row["tempat"]; ?></td>
                      <td><?= $row["jadwal_ibadah"]; ?></td>
                      <td><?= $row["jam_mulai"]; ?></td>
                      <td><?= $row["pengkotbah"]; ?></td>
                      <td><?= $row["organis"]; ?></td>
                      <td><?= $row["pemandu_nyanyian"]; ?></td>
                      <td><?= $row["bunga_mimbar"]; ?></td>
                      <td><?= $row["penanggung_jawab"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; 
                  
                  ?>
  </tbody>
</table>
      </div>
    </section>


    <section id="Keuangan" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Keuangan</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Laporan Keuangan<br>Gereja Kristen Jawa Boyolali</br></p>
        </div>

        <div class="row">
        <table class="table">
  <thead>
    <tr>
    <th>Jadwal</th>
    <th>Jenis Persembahan</th>
    <th>Nominal</th>
    <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
                  <?php foreach ($keuangan as $row) : 
                    $harga =$row["nominal"];
                    ?>
                   
                      <td><?= $row["jadwal"]; ?></td>
                      <td><?= $row["jenis_persembahan"]; ?></td>
                      <td>Rp. <?=number_format($harga,2,',','.');?></td>
                      <!-- <td>Rp <?= $row["nominal"]; ?></td> -->
                      <td><?= $row["keterangan"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; 
                  
                  ?>
  </tbody>
  <tfoot>
                    <?php
                      $total = mysqli_fetch_array(mysqli_query($conn, "SELECT SUM(nominal) as totalharga FROM `keuangan`"));
                    ?>
                    <tr>
                      <td><b>Total</b></td>
                      <td colspan="4"><b>Rp.<?= number_format($total["totalharga"],2,',','.'); ?></b></td>
                    </tr>
                  </tfoot>
</table>
      </div>
    </section>






    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3>Kontak Dengan Kami</h3>
                <div class="contact-address">
                  <p>Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311</p>
                  <p class="phone">Phone: <span>(0276) 321696</span></p>
                  <p class="email">E-mail: <span>(gkjboyolaliofficial@gmail.com)</span></p>
                </div>
                <!--<div class="social-icons">
                  <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>-->
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-block">
              <form method="post" action="send.php" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <label>Kepada</label><br />
                    <input type="email" name="email_penerima" placeholder="Email Penerima" style="margin-top: 5px;width: 400px" />
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                      <label>Subjek</label><br />
                      <input type="text" name="subjek" placeholder="Subjek" style="margin-top: 5px;width: 400px" />
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                      <label>Pesan</label><br />
                      <textarea name="pesan" placeholder="Pesan" rows="8" style="margin-top: 5px;width: 400px"></textarea>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" name="kirim_" id="submit" type="submit">Kirim Pesan</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
       
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Copyright ©2022 gkjboyolaliofficial  - H.Yudha - Teknik Informatika 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                - Universitas Kristen Surakarta -</p>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>       
    <script src="js/wow.js"></script>   
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>
   
    <script>
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table tbody').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  


</script>


  </body>
</html>