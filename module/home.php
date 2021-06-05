<?php
//include config
include_once('./library/config.php');
//include environment
include('./library/environment.php');
//include database
include('./library/database.php');
//query select where nim
$query = "SELECT * FROM tbl_informasi";
$result =  mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
  $id            = $row['id'];
  $judul          = $row['judul'];
  $content        = $row['isi_informasi'];
}

?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron hero">
  <div class="hero-inner">
    <h1 class="hero-title">SIJURI</h1>
    <p class="hero-tagline">
      Sistem Informasi Pengajuan Skripsi
    </p>
    <p class="hero-tagline">
      Untuk mengajukan sebuah judul skripsi mahasiswa diharuskan untuk masuk panel system dan mulai mengajukan sebuah judul skripsi dan minimal mengajukan 2 buah judul skripsi.
    </p>
    <div>
      <a class="btn btn-default btn-lg" href="mahasiswa/" role="button"><i class="fa fa-user"></i> Masuk Mahasiswa</i></a>
      <a class="btn btn-default btn-lg" href="dosen/" role="button"><i class="fa fa-graduation-cap"></i> Masuk Dosen</i></a>
      <a class="btn btn-default btn-lg" href="Chat-Realtime/" role="button"><i class="fa fa-commenting"></i> Live Chat</i></a>
    </div>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading" style="color: #fff;background-color: #0f8870;border-color:#0f8870; font-weight:bold; font-size:35px">
          <h3 class="panel-title"><i class="fa fa-bell"></i> <?php echo $judul ?> </h3>
        </div>
        <div class="panel-body">
          <?php echo $content ?>
        </div>
      </div>
    </div>
  </div>

  <hr>