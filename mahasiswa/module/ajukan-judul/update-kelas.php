<?php
session_start();
//include config
include_once('../../../library/config.php');
//include environment
include('../../../library/environment.php');
//include database
include('../../../library/database.php');
if ($_SESSION['nim'] == true) {
    $kelas = $_POST['kelas'];
    $nim = $_SESSION['nim'];

    $query = "UPDATE skripsi SET kelas = '$kelas' WHERE nim = '$nim'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header('Location:../../media.php?action=judul-skripsi');
    } else {
        header('Location:../../media.php?action=judul-skripsi');
    }
} else {
    header("location:media.php?action=dashboard");
}
