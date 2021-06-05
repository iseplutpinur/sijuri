<?php
session_start();
if (empty($_SESSION['username'] && $_SESSION['password'])) {
    header('location:index.php');
}
/* create environment */
include('../library/environment.php');
/* end environment */

/*db*/
include('../library/database.php');
/**/

/* start get config */
include('../library/config.php');
/* end get config */
include('part/header.php');


$sb_active = isset($_GET['action']) ? $_GET['action'] : 'dashboard';
$title = "";
$main_content = "";
$icon = "";

/* main content*/
if (!isset($_GET['action'])) {
    $icon = '<i class="pe-7s-graph"></i>';
    $title = 'Dashboard';
    $main_content = "module/dashboard.php";
} else {
    if ($_GET['action'] == "dashboard") {
        $main_content = "module/dashboard.php";
        $icon = '<i class="pe-7s-graph"></i>';
        $title = 'Dashboard';
    } elseif ($_GET['action'] == "profile") {
        $main_content = "module/profile.php";
        $icon = '<i class="pe-7s-user"></i>';
        $title = 'User Profile';

        //data judul
    } elseif ($_GET['action'] == "data-pengajuan-judul") {
        $icon = '<i class="pe-7s-server"></i>';
        $title = 'Data Pengajuan Judul';
        $main_content = "module/data-pengajuan-judul.php";

        //informasi
    } elseif ($_GET['action'] == "informasi") {
        $main_content = "module/data-informasi.php";
        $icon = '<i class="pe-7s-note"></i>';
        $title = 'Informasi';

        //mahasiswa
    } elseif ($_GET['action'] == "data-mahasiswa") {
        $icon = '<i class="pe-7s-study"></i>';
        $title = 'Data Mahasiswa';
        $main_content = "module/mahasiswa/data-mahasiswa.php";
    } elseif ($_GET['action'] == "tambah-mahasiswa") {
        $icon = '<i class="pe-7s-study"></i>';
        $title = 'Tambah Mahasiswa';
        $main_content = "module/mahasiswa/tambah-mahasiswa.php";
    } elseif ($_GET['action'] == "edit-mahasiswa") {
        $icon = '<i class="pe-7s-study"></i>';
        $title = 'Edit Mahasiswa';
        $main_content = "module/mahasiswa/edit-mahasiswa.php";
    } elseif ($_GET['action'] == "hapus-mahasiswa") {
        $icon = '<i class="pe-7s-study"></i>';
        $title = 'Hapus Mahasiswa';
        $main_content = "module/mahasiswa/hapus-mahasiswa.php";
    }

    //dosen
    elseif ($_GET['action'] == "data-dosen") {
        $icon = '<i class="pe-7s-study"></i>';
        $title = 'Data Dosen';
        $main_content = "module/dosen/data-dosen.php";
    } elseif ($_GET['action'] == "tambah-dosen") {
        $icon = '<i class="pe-7s-study"></i>';
        $title = 'Tambah Dosen';
        $main_content = "module/dosen/tambah-dosen.php";
    } elseif ($_GET['action'] == "edit-dosen") {
        $icon = '<i class="pe-7s-study"></i>';
        $title = 'Edit Dosen';
        $main_content = "module/dosen/edit-dosen.php";
    } elseif ($_GET['action'] == "hapus-dosen") {
        $icon = '<i class="pe-7s-study"></i>';
        $title = 'Hapus Dosen';
        $main_content = "module/dosen/hapus-dosen.php";
    }

    //fakultas
    elseif ($_GET['action'] == "fakultas") {
        $icon = '<i class="pe-7s-note"></i>';
        $title = 'Fakultas';
        $main_content = "module/fakultas/data-fakultas.php";
    } elseif ($_GET['action'] == "tambah-fakultas") {
        $icon = '<i class="pe-7s-note"></i>';
        $title = 'Tambah Fakultas';
        $main_content = "module/fakultas/tambah-fakultas.php";
    } elseif ($_GET['action'] == "edit-fakultas") {
        $icon = '<i class="pe-7s-note"></i>';
        $title = 'Edit Fakultas';
        $main_content = "module/fakultas/edit-fakultas.php";
    }

    // jurusan
    elseif ($_GET['action'] == "jurusan") {
        $icon = '<i class="pe-7s-note"></i>';
        $title = 'Jurusan';
        $main_content = "module/jurusan/data-jurusan.php";
    } elseif ($_GET['action'] == "tambah-jurusan") {
        $icon = '<i class="pe-7s-note"></i>';
        $title = 'Tambah Jurusan';
        $main_content = "module/jurusan/tambah-jurusan.php";
    } elseif ($_GET['action'] == "edit-jurusan") {
        $icon = '<i class="pe-7s-note"></i>';
        $title = 'Edit Jurusan';
        $main_content = "module/jurusan/edit-jurusan.php";
    }

    // dosen pembimbing
    elseif ($_GET['action'] == "dosen-pembimbing") {
        $icon = '<i class="pe-7s-note"></i>';
        $title = 'Dosen Pembimbing';
        $main_content = "module/pembimbing/data-pembimbing.php";
    } elseif ($_GET['action'] == "tambah-pembimbing") {
        $icon = '<i class="pe-7s-note"></i>';
        $title = 'Tambah pembimbing';
        $main_content = "module/pembimbing/tambah-pembimbing.php";
    } elseif ($_GET['action'] == "edit-pembimbing") {
        $icon = '<i class="pe-7s-note"></i>';
        $title = 'Edit pembimbing';
        $main_content = "module/pembimbing/edit-pembimbing.php";
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
