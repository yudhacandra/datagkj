<?php
include '../../database.php';
if(isset($_POST['simpan']))
{
$ijm=$_POST['idjabatan_majelis'];
$pm=$_POST['periode_majelis'];
$jlam=$_POST['jumlah_anggota_majelis'];

$query = mysqli_query($conn,"DELETE FROM `struktur_majelis` WHERE  `idjabatan_majelis`=$ijm ");
if($hasil){ 
  // $alert = $_SESSION['alert'] ='Data Berhasil Di Tambahkan';
  header("location:struktur_majelis.php");
  }
}
?>

<?php
//proses hapus data
    if ($_GET['id']) {
      $idjabatan_majelis =$_GET['id'];
        $hapus = "DELETE FROM struktur_majelis WHERE idjabatan_majelis='$idjabatan_majelis'";
        $sql = mysqli_query ($conn,$hapus);
        if ($sql) {        
            ?>
                <script language="JavaScript">
                alert('Seluruh Data struktur_majelis <?=$idjabatan_majelis?> Berhasil dihapus!');
                document.location='struktur_majelis.php?page=lihat';
                </script>
            <?php        
        } else {
            echo "<font color=red><center>Data Mahasiswa gagal dihapus</center></font>";    
        }
    }
    
//Tutup koneksi engine MySQL
    mysql_close($Open);
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