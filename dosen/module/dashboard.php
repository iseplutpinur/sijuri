<?php
$nip = $_SESSION['nip'];
// data pengajuan judul
$mahasiswa = 0;
$query = "SELECT count(*) as count FROM skripsi WHERE pembimbing1 = '$nip' or pembimbing2 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $mahasiswa += $row['count'];
  }
}
// Belum dikoreksi
$total_judul = 0;
$query = "SELECT count(*) as count FROM skripsi WHERE pembimbing1 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $total_judul += ($row['count'] * 2);
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE pembimbing2 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $total_judul += ($row['count'] * 2);
  }
}

// belum dikoreksi
$belum_dikoreksi = 0;
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul1 = '0' and pembimbing1 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $belum_dikoreksi += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul1 = '0' and pembimbing2 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $belum_dikoreksi += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul2 = '0' and pembimbing1 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $belum_dikoreksi += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul2 = '0' and pembimbing2 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $belum_dikoreksi += $row['count'];
  }
}

// Diterima
$diterima = 0;
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul1 = '1'  and pembimbing1 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $diterima += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul1 = '1' and pembimbing2 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $diterima += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul2 = '1' and pembimbing1 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $diterima += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul2 = '1' and pembimbing2 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $diterima += $row['count'];
  }
}

// ditolak
$ditolak = 0;
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul1 = '2' and pembimbing1 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $ditolak += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul1 = '2' and pembimbing2 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $ditolak += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul2 = '2' and pembimbing1 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $ditolak += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul2 = '2' and pembimbing2 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $ditolak += $row['count'];
  }
}


// tidak_diketahui
$tidak_diketahui = 0;
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul1 (NOT IN ('0','1','2')) and pembimbing1 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $tidak_diketahui += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul1 (NOT IN ('0','1','2')) and pembimbing2 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $tidak_diketahui += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul2 (NOT IN ('0','1','2')) and pembimbing1 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $tidak_diketahui += $row['count'];
  }
}
$query = "SELECT count(*) as count FROM skripsi WHERE status_judul2 (NOT IN ('0','1','2')) and pembimbing2 = '$nip'";
$rows = mysqli_query($connect, $query);
if ($rows) {
  while ($row = mysqli_fetch_array($rows)) {
    $tidak_diketahui += $row['count'];
  }
}

?>
<style>
  .card-counter {
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover {
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary {
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger {
    background-color: #ef5350;
    color: #FFF;
  }

  .card-counter.success {
    background-color: #66bb6a;
    color: #FFF;
  }

  .card-counter.info {
    background-color: #26c6da;
    color: #FFF;
  }

  .card-counter i {
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers {
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name {
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
</style>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
        <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"><?= $icon . " " . $title; ?></div>
        <div class="panel-body">
          <h4>Pengajuan Judul Skripsi</h4>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
              <div class="card-counter primary">
                <i class="fa fa-book"></i>
                <span class="count-numbers"><?= $total_judul; ?></span>
                <span class="count-name">Total Judul</span>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
              <div class="card-counter success">
                <i class="fa fa-check"></i>
                <span class="count-numbers"><?= $diterima; ?></span>
                <span class="count-name">Diterima</span>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
              <div class="card-counter danger">
                <i class="fa fa-close"></i>
                <span class="count-numbers"><?= $ditolak; ?></span>
                <span class="count-name">Ditolak</span>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
              <div class="card-counter info">
                <i class="fa fa-refresh"></i>
                <span class="count-numbers"><?= $belum_dikoreksi; ?></span>
                <span class="count-name">Belum Dikoreksi</span>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
              <div class="card-counter success">
                <i class="fa fa-question"></i>
                <span class="count-numbers"><?= $tidak_diketahui; ?></span>
                <span class="count-name">Tidak Diketahui</span>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
              <div class="card-counter info">
                <i class="fa fa-user"></i>
                <span class="count-numbers"><?= $mahasiswa; ?></span>
                <span class="count-name">Mahasiswa</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>