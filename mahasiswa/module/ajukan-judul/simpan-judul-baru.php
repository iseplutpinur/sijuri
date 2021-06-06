<?php
session_start();
//include config
include_once('../../../library/config.php');
//include environment
include('../../../library/environment.php');
//include database
include('../../../library/database.php');

if ($_SESSION['nim'] == true) {
	// upload file
	$targetDir = "../../../file_up/";
	if (!is_dir($targetDir)) {
		if (!mkdir($targetDir, 0777, true)) {
			throw new Exception("Unable to upload your document. We were unable to create the required directories");
		}
	}
	$f_ext =  $_FILES['fileinput']['name'];
	$f_ext =  explode(".", $f_ext);
	$f_ext =  end($f_ext);
	$n_file = $_SESSION['nim'] . "." . $f_ext;

	$targetFile = $targetDir . $n_file;
	$fileType = pathinfo($targetFile, PATHINFO_EXTENSION);

	// if (file_exists($targetFile)) {
	// 	throw new Exception("Unable to upload your document. The file already exists");
	// }

	if ($_FILES["fileinput"]["size"] > 2000000) {
		throw new Exception("Unable to upload your document. The file is to large (Maximum of 2MB)");
	}

	if (!move_uploaded_file($_FILES["fileinput"]["tmp_name"], $targetFile)) {
		//Keeps failing here with error code 0
		throw new Exception("Unable to upload your document. There was an error uploading the file");
	}

	// simpan data
	$nim = $_SESSION['nim'];
	$mahasiswa = $_SESSION['nama_mhs'];
	$prodi = $_SESSION['prodi'];
	$judul1 = $_POST['judul1'];
	$desjudul1 = $_POST['desjudul1'];
	$status_judul1 = 0;
	$judul2 = $_POST['judul2'];
	$desjudul2 = $_POST['desjudul2'];
	$status_judul2 = 0;
	$kelas = $_POST['kelas'];
	$pembimbing1 = $_POST['pembimbing1'];
	$pembimbing2 = $_POST['pembimbing2'];
	$query = "INSERT INTO skripsi (nim, judul1, desjudul1, judul2, desjudul2, status_judul1, status_judul2, prodi, kelas, mahasiswa, pembimbing1, pembimbing2, file_url) VALUES ('$nim', '$judul1', '$desjudul1', '$judul2', '$desjudul2', '$status_judul1', '$status_judul2', '$prodi', '$kelas', '$mahasiswa', '$pembimbing1', '$pembimbing2', '$n_file')";
	$query = mysqli_query($connect, $query);

	if ($query) {
		header('Location:../../media.php?action=judul-skripsi');
	} else {
		header('Location:../../media.php?action=judul-skripsi	');
	}
} else {
	header('Location:media.php?action=judul-skripsi');
	exit;
}
