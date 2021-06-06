<?php
session_start();
//include config
include_once('../../library/config.php');
//include environment
include('../../library/environment.php');
//include database
include('../../library/database.php');

if ($_SESSION['nip'] == true) {
	$data = $_GET['data'];
	$nim = $_GET['nim'];
	$query = "UPDATE skripsi SET status_judul2 = '$data' WHERE nim = '$nim'";
	if (mysqli_query($connect, $query)) {
		header('Location: ../media.php?action=lihat-judul&nim=' . $_GET['nim'] . '');
	} else {
		header('Location: ../media.php?action=lihat-judul&nim=' . $_GET['nim'] . '');
	}
} else {
	header("location: ../media.php?action=dashboard");
}
