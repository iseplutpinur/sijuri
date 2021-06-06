<?php
session_start();
//include config
include_once('../../../library/config.php');
//include environment
include('../../../library/environment.php');
//include database
include('../../../library/database.php');
if ($_SESSION['nim'] == true) {
    $nim = $_SESSION['nim'];
    $pembimbing1 = $_POST['pembimbing1'];
    $pembimbing2 = $_POST['pembimbing2'];

    $query = "UPDATE skripsi SET pembimbing1 = '$pembimbing1', pembimbing2 = '$pembimbing2' WHERE nim = '$nim'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header('Location:../../media.php?action=judul-skripsi');
    } else {
        header('Location:../../media.php?action=judul-skripsi');
    }
} else {
    header("location:media.php?action=dashboard");
}
