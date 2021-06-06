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
    $n_file = $_POST['nim'] . "." . $f_ext;

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
    $nim = $_POST['nim'];

    $query = mysqli_query($connect, "UPDATE `skripsi` SET `file_url` = '$n_file' WHERE `skripsi`.`nim` = '$nim'");

    if ($query) {
        header('Location:../../media.php?action=judul-skripsi');
    } else {
        header('Location:../../media.php?action=judul-skripsi');
    }
} else {
    header('Location:media.php?action=judul-skripsi');
    exit;
}
