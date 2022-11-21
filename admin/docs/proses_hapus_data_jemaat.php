<?php
include '../../database.php';
if(isset($_POST['simpan']))
{
    $ni=$_POST['no_induk'];
    $nj=$_POST['nama_jemaat'];
    $jk=$_POST['jeniskelamin'];
    $at=$_POST['alamat_tinggal'];
    $dl=$_POST['datalahir'];
    $bo=$_POST['baptis_oleh'];
    $so=$_POST['sidi_oleh'];
    $no=$_POST['nikah_oleh'];
    $mo=$_POST['meninggal_oleh'];
    $ot=$_POST['orangtua'];
    $si=$_POST['suamiistri'];
    $ag=$_POST['asalgereja'];
    $tg=$_POST['tujuangereja'];
    $ke=$_POST['ket'];
    $kt=$_POST['ketambahan'];

$query = mysqli_query($conn,"DELETE FROM `data_jemaat` WHERE  `no_induk`=$ni ");
if($hasil){
  header("location:data_jemaat.php");
  }
}
?>

<?php
  //proses hapus data
    if ($_GET['id']) 
    {
      $no_induk =$_GET['id'];
        $hapus = "DELETE FROM data_jemaat WHERE no_induk='$no_induk'";
        $sql = mysqli_query ($conn,$hapus);
        if ($sql) 
        {        
?>
    <script language="JavaScript">
      alert('Data <?=$no_induk?> Berhasil dihapus!');
      document.location='data_jemaat.php?page=lihat';
    </script>
  <?php        
        } else {
            echo "<font color=red><center>Data Jemaat gagal dihapus</center></font>";    
        }
    }

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