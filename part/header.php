<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Kelompok 6">
  <link rel="icon" href="favicon.ico">
  <title>SIJURI - Kelompok 5</title>
  <link href="<?php echo $config['base_url'] ?>assets/fonts/fonts.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo $config['base_url'] ?>assets/css/font-awesome/css/font-awesome.css">
  <link href="<?php echo $config['base_url'] ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $config['base_url'] ?>assets/media/css/jquery.dataTables.min.css" rel="stylesheet" />
  <link href="<?php echo $config['base_url'] ?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="<?php echo $config['base_url'] ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #0f8870;border-color: #0f8870;color: #fff;font-family: 'Lato'; font-weight:bold;font-size:17px">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $config['base_url'] ?>" style="color:#fff;font-family: 'Lato'; font-weight:bold;font-size:18px"><i class="fa fa-home"></i> Home</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav" id="main-navbar">
          <li><a href="index.php?action=judul&kode_jurusan=all" style="color:#fff"><i class="fa fa-folder-open-o"></i> Semua Judul</a></li>
        </ul>
      </div>
    </div>
  </nav>