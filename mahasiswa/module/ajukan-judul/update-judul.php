<?php
session_start();
//include config
include_once('../../../../library/config.php');
//include environment
include('../../../library/environment.php');
//include database
include('../../../library/database.php');

if ($_SESSION['nim'] == true) {
	$type = "";
	if ($_POST['type'] == 'edit-judul1') {
		$type = 1;
	} elseif ($_POST['type'] == 'edit-judul2') {
		$type = 2;
	}
	$judul = $_POST['judul' . $type];
	$desjudul = $_POST['desjudul' . $type];
	$nim = $_POST['nim'];

	$query = "UPDATE skripsi SET judul$type = '$judul', desjudul$type = '$desjudul' WHERE nim = '$nim'";
	$result = mysqli_query($connect, $query);
	if ($result) {
		header('Location:../../media.php?action=judul-skripsi');
	} else {
		header('Location:../../media.php?action=judul-skripsi');
	}
} else {
	header("location:media.php?action=dashboard");
}
