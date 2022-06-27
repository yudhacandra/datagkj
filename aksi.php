<?php
session_start();
include 'database.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


// Mencari user berdasarkan username dan password yang di input
$query  	= "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
$result     = mysqli_query($conn, $query);
$num_row    = mysqli_num_rows($result);
$query1  	= "SELECT * FROM data_majelis WHERE username='$username' AND password='$password' ";
$result1     = mysqli_query($conn, $query1);
$num_row1    = mysqli_num_rows($result1);
// Mengecek data nya ada atau tidak
if ($num_row > 0) {
	$row    = mysqli_fetch_array($result);
	// Mengirim response ke ajax

	if ($row['status'] == "Aktif") {

		echo "Admin";
		// Membuat Session
		$_SESSION['id_admin'] = $row['id'];
		$_SESSION['role'] = "Admin";
	} else {
		echo "Tidak Aktif";
	}

	// Jika Rolenya kasir maka fungsi ini yang akan berjalan

}else if ($num_row1 > 0) {
	$row1    = mysqli_fetch_array($result1);
	// Mengirim response ke ajax

	if ($row1['status'] == "Aktif") {

		echo "Majelis";
		// Membuat Session
		$_SESSION['id_majelis'] = $row1['id_majelis'];
		$_SESSION['role'] = "Majelis";
	} else {
		echo "Tidak Aktif";
	}

	// Jika Rolenya kasir maka fungsi ini yang akan berjalan

}

else {
	// Mengirim response ke ajax
	echo "error";
}
