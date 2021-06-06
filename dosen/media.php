<?php
session_start();
if (empty($_SESSION['nip'] && $_SESSION['password'])) {
    header('location:index.php');
}

/* create environment */
include('../library/environment.php');
/* end environment */

/*db*/
include('../library/database.php');
/*/

/* start get config */
include('../library/config.php');
/* end get config */
include('part/header.php');


$title = "";
$main_content = "";
$icon = "";

/* main content*/
if (!isset($_GET['action'])) {
    $main_content = "module/dashboard.php";
    $icon = '<i class="pe-7s-graph"></i> ';
    $title = 'Dashboard';
} else {
    if ($_GET['action'] == "dashboard") {
        $main_content = "module/dashboard.php";
        $icon = '<i class="pe-7s-graph"></i> ';
        $title = 'Dashboard';
    } elseif ($_GET['action'] == "profile-dosen") {
        $main_content = "module/profile.php";
        $icon = '<i class="pe-7s-user"></i> ';
        $title = 'Profile Dosen';

        //data judul
    } elseif ($_GET['action'] == "data-pengajuan-judul") {
        $main_content = "module/data-pengajuan-judul.php";
        $icon = '<i class="pe-7s-server"></i> ';
        $title = 'Data Pengajuan Judul';
    } elseif ($_GET['action'] == "lihat-judul") {
        $main_content = "module/lihat-judul.php";
        $icon = '<i class="pe-7s-server"></i> ';
        $title = 'Lihat Judul';
    } else {
        $main_content = "module/404.php";
        echo "<script>window.location.href = '../404.html?back=dosen'; </script>";
    }
}

// menyiapkan footer dan header
// header
$header_title = "SIJURI Kelompok 5"; // default
$footer_title = 'SIJURI © 2021 Kelompok 5, All Rights Reserved.';
$result =  mysqli_query($connect, "SELECT isi FROM tbl_pengaturan WHERE nama='header'");
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $header_title = $row['isi'];
    }
}

$result =  mysqli_query($connect, "SELECT isi FROM tbl_pengaturan WHERE nama='footer'");
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $footer_title = $row['isi'];
    }
}

include('part/sidebar.php');


// ambil navbar
include('part/navbar.php');

/* main content*/
if (file_exists($main_content)) require $main_content;
else  echo "<script>window.location.href = '../404.html?back=auth'; </script>";

/* end content*/
include('part/footer.php');
