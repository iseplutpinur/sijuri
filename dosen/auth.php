<?php
require_once('../library/environment.php');
require_once('../library/database.php');

$username = $_POST['username'];
$password = $_POST['password'];


$query 	  = mysqli_query($connect, "SELECT * FROM tbl_dosen WHERE nip = '$username' and password = '$password'");
$row  	  = mysqli_fetch_array($query, MYSQLI_ASSOC);

if ($row) {

	session_start();

	$_SESSION['nip'] 			  = $row['nip'];
	$_SESSION['password'] 	= $row['password'];
	$_SESSION['nama_dosen'] 	= $row['nama_dosen'];
	$_SESSION['tanggal_lahir']			= $row['tanggal_lahir'];
	header('Location: media.php?action=dashboard');
} else {
	$error = '<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong><i class="fa fa-times-circle"></i> Warning!</strong> Username dan Password Anda salah.
			  </div>';
	include('index.php');
}
