<?php
	$content = "
	<html> 
	<body>
		<h1>MPDF WORK !</h1> 
		Selamat datang di rachmat.ID
	</body>
	</html>
	";

	include "./vendor/autoload.php";
	$mpdf = new Mpdf();
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	$mpdf->WriteHTML($content);
	$mpdf->Output();
?>