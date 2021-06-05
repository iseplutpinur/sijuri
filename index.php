<?php

/**
 * Skripsi - Universitas KH. A. Wahab Hasbullah.
 *
 * @package  Skripsi Beta Version
 * @author   Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 */

/* create environment */
include('library/environment.php');
/* end environment */

/* start get config */
include('library/config.php');
/* end get config */

/* start header */
include('part/header.php');
/* end header */

/* start content */
if (!isset($_GET['action'])) {
    require "module/home.php";
} else {
    if ($_GET['action'] == "home") {
        require "module/home.php";
    } elseif ($_GET['action'] == "semua-judul") {
        $kode_prodi = '0';
        $breadcrumb = 'Semua judul';
        require "module/tabel-judul-skripsi.php";
    } elseif ($_GET['action'] == "kearsipan-digital") {
        $kode_prodi = '1';
        $breadcrumb = 'Kearsipan Digital';
        require "module/tabel-judul-skripsi.php";
    } elseif ($_GET['action'] == "bisnis-logistik") {
        $kode_prodi = '2';
        $breadcrumb = 'Bisnis Logistik';
        require "module/tabel-judul-skripsi.php";
    } elseif ($_GET['action'] == "antropologi") {
        $kode_prodi = '';
        $breadcrumb = 'Antropologi';
        require "module/tabel-judul-skripsi.php";
    } elseif ($_GET['action'] == "hubungan-internasional") {
        $kode_prodi = '';
        $breadcrumb = 'Hubungan Internasional';
        require "module/tabel-judul-skripsi.php";
    } else {
        echo "<script>window.location.href = ' 404.html?back=index.php'; </script>";
    }
}

/* end content */

/* start footer */
include('part/footer.php');
/* end footer */
