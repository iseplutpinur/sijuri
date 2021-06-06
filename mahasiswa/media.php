<?php
session_start();
if (empty($_SESSION['nim'] && $_SESSION['password'])) {
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

// set judul navigasi dia atas dan content file
if (!isset($_GET['action'])) {
    // Dashboard
    $icon = '<i class="pe-7s-graph"></i> ';
    $title = 'Dashboard';
    $main_content = "module/dashboard.php";
} elseif ($_GET['action'] == "dashboard") {
    $icon = '<i class="pe-7s-graph"></i> ';
    $title = 'Dashboard';
    $main_content = "module/dashboard.php";
}
// Mahasiswa
elseif ($_GET['action'] == "profile-mahasiswa") {
    $icon = '<i class="pe-7s-user"></i> ';
    $title = 'Profile Mahasiswa';
    $main_content = "module/profile.php";
}
// Judul Skripsi
elseif ($_GET['action'] == "judul-skripsi") {
    $icon = '<i class="pe-7s-note2"></i> ';
    $title = 'Judul Skripsi';
    $main_content = "module/ajukan-judul/judul-skripsi.php";
} elseif ($_GET['action'] == "edit-judul1") {
    $icon = '<i class="pe-7s-note2"></i> ';
    $title = 'Edit Judul 1';
    $main_content = "module/ajukan-judul/edit-judul1.php";
} elseif ($_GET['action'] == "edit-judul2") {
    $icon = '<i class="pe-7s-note2"></i> ';
    $title = 'Edit Judul 2';
    $main_content = "module/ajukan-judul/edit-judul2.php";
} elseif ($_GET['action'] == "ajukan-judul") {
    $icon = '<i class="pe-7s-note2"></i> ';
    $title = 'Ajukan Judul';
    $main_content = "module/ajukan-judul/ajukan-judul.php";
}
// Dosen Pembimbing
elseif ($_GET['action'] == "dosen-pembimbing") {
    $icon = '<i class="pe-7s-users"></i> ';
    $title = 'Dosen Pembimbing';
    $main_content = "module/dosen-pembimbing.php";
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
// sidebar
include('part/sidebar.php');
// ambil navbar
include('part/navbar.php');

/* main content*/
if (file_exists($main_content)) require $main_content;
else  echo "<script>window.location.href = '../404.html?back=mahasiswa'; </script>";

/* end content*/
include('part/footer.php');
