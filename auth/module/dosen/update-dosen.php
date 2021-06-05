<?php
session_start();
//include config
include_once('../../../library/config.php');
//include environment
include('../../../library/environment.php');
//include database
include('../../../library/database.php');

if ($_SESSION['username'] == true) {
	$password = $_POST['password'] == "" ? "" : ", password = '" . $_POST['password'] . "'";
	$nama_dosen = $_POST['nama_dosen'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$email = $_POST['email'];
	$no_telepon = $_POST['no_telepon'];
	$nip = $_POST['nip'];

	$query = "UPDATE tbl_dosen SET nama_dosen = '$nama_dosen', tanggal_lahir = '$tanggal_lahir', email = '$email', no_telepon = '$no_telepon' $password WHERE nip = '$nip'";
	if (!mysqli_query($connect, $query)) {
		header('Location: ../../media.php?action=data-dosen&error');
	} else {
		header('Location: ../../media.php?action=data-dosen&success');
	}
} else {
	header("location:media.php?action=dashboard");
}
