<?php
session_start();
//include config
include_once('../../../library/config.php');
//include environment
include('../../../library/environment.php');
//include database
include('../../../library/database.php');

if ($_SESSION['username'] == true) {
	$nama_dosen = $_POST['nama_dosen'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$email = $_POST['email'];
	$no_telepon = $_POST['no_telepon'];
	$nip = $_POST['nip'];
	$password = $_POST['password'];

	$query = "INSERT INTO tbl_dosen (nip,nama_dosen,password,tanggal_lahir,email,no_telepon) VALUES ('$nip','$nama_dosen','$password','$tanggal_lahir','$email','$no_telepon')";

	if (!mysqli_query($connect, $query)) {
		header('Location: ../../media.php?action=data-dosen&error');
	} else {
		header('Location: ../../media.php?action=data-dosen&success');
	}
} else {
	header('Location:media.php?action=dashboard');
	exit;
}
