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
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

    <style>
      .warta{
        height: 750px;
      }
      
      .header_css{
        margin-left: 100px;
        margin-bottom: 8px;
        margin-top: 10px;
        font-size: 12pt;
        font-family: Times New Roman;
        color: #fff;
      }
    </style>
  </head>
  <body>

    <!-- Header Section Start -->
    <header id="beranda" data-stellar-background-ratio="0.5" >
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header header_css">
            <right>
          <a href="index.php" img class="center"><img src="img/gkj.png" height="60" width="60"></a><b clas="text-primary"> GKJ BOYOLALI<b class="text-primary"></b>
          </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#warta">Warta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#jemaat">Jemaat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Ibadah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#kas">Keuangan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link login-button" href="login-majelis.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Kontak</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <!--<ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#beranda">Beranda</a>
            </li>
            <li>
              <a class="page-scroll" href="#warta">Warta</a>
            </li>
            <li>
              <a class="page-scroll" href="#jemaat">Jemaat</a>
            </li>
            <li>
              <a class="page-scroll" href="#features">Ibadah</a>
            </li>
            <li>
              <a class="page-scroll" href="#kas">Keuangan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link login-button" href="login-majelis.php">Login</a>
            </li>
            <li>
              <a class="page-scroll" href="#contact">Kontak</a>
            </li>
        </ul>-->
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <br></br>
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">GEREJA KRISTEN JAWA </h1>
              <h1>BOYOLALI</h1>
              <br></br>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><b>Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311 </b></p>
            
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="warta" class="section warta">
      <div class="container h-50">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Warta Gereja</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Anda dapat mendownload warta gereja di bawah ini.<br>" Klik Download Pada Ikon Download "</p>
        </div>
        <div class="row">
        <?php
        include 'database.php';
        $data_warta = mysqli_query($conn, "SELECT * FROM `warta` ORDER BY tanggal limit 3");

        while ($data = mysqli_fetch_array($data_warta))
        {
        ?>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <a href="admin/docs/download.php?filename=<?= $data['warta_gereja'];?>"><i class="lnr lnr-download"></i></a>
              </div>
              <h4><?= $data['judul'];?></h4>
              <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p> -->
            </div>
          </div>
        <?php }
        ?>
       
          
      
      </div>
      </div>
    </section>
    <!-- Services Section End -->

     <!-- Services Section Start -->
     <section id="jemaat" class="section jemaat">
      <div class="container h-50">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" >Jemaat Gereja</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
        <?php
        include 'database.php';
        $data_jemaat = mysqli_query($conn, "SELECT * FROM `warta` ORDER BY tanggal limit 3");

        while ($data = mysqli_fetch_array($data_jemaat))
        {
        ?>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <a href="?jemaat=<?= $data['jemaat_gereja'];?>"><i class="lnr lnr-download"></i></a>
              </div>
              <h4><?= $data['judul'];?></h4>
              <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p> -->
            </div>
          </div>
        <?php }
        ?>
       
          
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Jadwal Ibadah</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="container">
              <div class="row">
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-rocket"></i>
                    </span>
                    <div class="text">
                      <h4>Bootstrap 4 Based</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-laptop-phone"></i>
                    </span>
                    <div class="text">
                      <h4>Fully Responsive</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-layers"></i>
                    </span>
                    <div class="text">
                      <h4>Parallax Background</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-cog"></i>
                    </span>
                    <div class="text">
                      <h4>Easy to Customize</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End -->    

    <!-- Start Keuangan Table Section -->
    <div id="kas" class="section keuangan-section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Keuangan</h2>
          <hr class="lines">
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>

        <div class="row pricing-tables">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Harian</h2>
                <span>Rp. 1.238.000.</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Get Plan</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Mingguan</h2>
                <span>Rp. 4.756.000.</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Bulanan</h2>
                <span>Rp. 12.870.000.</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Buy Now</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End Keuangan Table Section -->

    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3>Kontak dengan kami</h3>
                <div class="contact-address">
                  <p>Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57311</p>
                  <p class="phone">Phone: <span>(0276) 321696</span></p>
                  <p class="email">E-mail: <span>(boyolali@gkj.or.id)</span></p>
                </div>
                <div class="social-icons">
                  <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama" required data-error="Tolong masukan namamu">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="Email" required data-error="Tolong masukan Emailmu">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Pesan" rows="8" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Kirim pesan</button>
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
          <div class="col-lg-3">
            <div class="copyright"> </div>
          </div>
		<div class="col-lg-6">
<p class="text-center">GKJBoyolaliofficial ©2022-hegaryudha || TI-UKS</p>
        </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/smoothscroll.js"></script>    
    <script src="js/jquery.slicknav.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>

  </body>
</html>