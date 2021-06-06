<?php
//error_reporting('0');
//include config
include_once('../library/config.php');
//include environmrnt
include('../library/environment.php');
//var data nim
$var = $_SESSION['nim'];
//Data mentah yang ditampilkan ke tabel
include('../library/database.php');
$query  = "SELECT * FROM skripsi WHERE nim = '$var'";
$result =  mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {

  $nim         = $row['nim'];
  $nama        = $row['mahasiswa'];
  $judul1      = $row['judul1'];
  $description1 = $row['desjudul1'];
  $judul2      = $row['judul2'];
  $description2 = $row['desjudul2'];
  $pembimbing1 = $row['pembimbing1'];
  $pembimbing2 = $row['pembimbing2'];
  $kelas       = $row['kelas'];
  $status1     = $row['status_judul1'];
  $status2     = $row['status_judul2'];
  $lampiran = $row['file_url'];
  $lampiran = $lampiran ? '<a href="../file_up/' . $lampiran . '" style="text-decoration:none; color:#21c2e5; font-weight:bold" target="_blank"> Download Here</a>' : "";
}
error_reporting('0');
//status judul 1
if ($status1 == '0') {
  $button1 = '<div class="alert alert-info text-center" style="background-color: #0b6e84;margin-top:20px; color:white;">
                                            Belum Dikoreksi
                                          </div>';
} elseif ($status1 == '1') {
  $button1 = '<div class="alert alert-info text-center" style="background-color: #0b841a;margin-top:20px; color:white;">
                                            Judul Diterima
                                          </div>';
} elseif ($status1 == '2') {
  $button1 = '<div class="alert alert-info text-center" style="background-color: #840b0b;margin-top:20px; color:white;">
                                            Judul Ditolak
                                          </div>';
} else {
  $button1 = '<div class="alert alert-info text-center" style="background-color: #bb6f11;margin-top:20px; color:white;">
                                            Status Tidak Diketahui
                                          </div>';
}
//status judul 2
if ($status2 == '0') {
  $button2 = '<div class="alert alert-info text-center" style="background-color: #0b6e84;margin-top:20px; color:white;">
                                            Belum Dikoreksi
                                          </div>';
} elseif ($status2 == '1') {
  $button2 = '<div class="alert alert-info text-center" style="background-color: #0b841a;margin-top:20px; color:white;">
                                            Judul Diterima
                                          </div>';
} elseif ($status2 == '2') {
  $button2 = '<div class="alert alert-info text-center" style="background-color: #840b0b;margin-top:20px; color:white;">
                                            Judul Ditolak
                                          </div>';
} else {
  $button2 = '<div class="alert alert-info text-center" style="background-color: #bb6f11;margin-top:20px; color:white;">
                                            Status Tidak Diketahui
                                          </div>';
}
//var data
$nim = $_SESSION['nim'];
//query checking
$query = "SELECT nim FROM skripsi WHERE nim = '$nim'";
$result =  mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
  $register = $row['nim'];
}
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <?php if (isset($register) == '') { ?>
          <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
            <div class="unwaha-padding panel-heading text-light" style="color:#fff;background-color: #158873;border-color: #158873; font-family: sans-serif;"> <i class="pe-7s-note2"></i> Detail Pengajuan Judul</div>
            <div class="panel-body">
              <a href="media.php?action=ajukan-judul" class="btn btn-success"><i class="pe-7s-note2"></i> Ajukan Judul Baru</a>
            </div>
          </div>
        <?php } else { ?>
          <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
            <div class="unwaha-padding panel-heading text-light" style="color:#fff;background-color: #158873;border-color: #158873; font-family: sans-serif;"> <i class="pe-7s-note2"></i> Detail Pengajuan Judul Skripsi</div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th class="text-center" width="5%">Atrribute</th>
                      <th class="text-center" width="35%">Value</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>NIM</td>
                      <td><?php if (isset($nim)) {
                            echo $nim;
                          } else {
                            echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>';
                          } ?></td>
                    </tr>
                    <tr>
                      <td>Nama Mahasiswa</td>
                      <td><?php if (isset($nama)) {
                            echo $nama;
                          } else {
                            echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>';
                          } ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="alert alert-info" role="alert" style="font-family:sans-serif;background-color:#158873; color:white;">Judul Skipsi 1</div>
              <div class="table-responsive">
                <table class="table table-bordered table-striped" style="font-family:sans-serif">
                  <thead>
                    <tr>
                      <th class="text-center" width="5%">Atrribute</th>
                      <th class="text-center" width="35%">Value</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Judul Skripsi</td>
                      <td><?php if (isset($judul1)) {
                            echo $judul1;
                          } else {
                            echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>';
                          } ?></td>
                    </tr>
                    <tr>
                      <td>Desciptions Judul</td>
                      <td><?php if (isset($description1)) {
                            echo $description1;
                          } else {
                            echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>';
                          } ?></td>
                    </tr>
                    <tr>
                      <td>Status Judul </td>
                      <td><?php if (isset($button1)) {
                            echo $button1;
                          } else {
                            echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>';
                          } ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a href="media.php?action=edit-judul1" type="button" class="btn btn-success" style="border-color: #158873;color: #fff;"><i class="pe-7s-config"></i> Ubah Data</a>
              <br>
              <br>

              <div class="alert alert-info" role="alert" style="font-family:sans-serif;background-color:#158873; color:white">Judul Skipsi 2</div>
              <div class="table-responsive">
                <table class="table table-bordered table-striped" style="font-family:sans-serif">
                  <thead>
                    <tr>
                      <th class="text-center" width="5%">Atrribute</th>
                      <th class="text-center" width="35%">Value</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Judul Skripsi</td>
                      <td><?php if (isset($judul2)) {
                            echo $judul2;
                          } else {
                            echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>';
                          } ?></td>
                    </tr>
                    <tr>
                      <td>Desciptions Judul</td>
                      <td><?php if (isset($description2)) {
                            echo $description2;
                          } else {
                            echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>';
                          } ?></td>
                    </tr>
                    <tr>
                      <td>Status Judul</td>
                      <td><?php if (isset($button2)) {
                            echo $button2;
                          } else {
                            echo '<div class="alert alert-danger" role="alert">Data Not Found.</div>';
                          } ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a href="media.php?action=edit-judul2" type="button" class="btn btn-success" style="border-color: #158873;color: #fff; font-family:sans-serif"><i class="pe-7s-config"></i> Ubah Data</a>

              <br>
              <br>
              <div class="alert alert-info" role="alert" style="font-family:sans-serif;background-color:#158873; color:white">Lampiran File <?= $lampiran ?></div>
              <div class="table-responsive" style="font-family: sans-serif;">
                <form action="module/ajukan-judul/update-file.php" method="POST" enctype='multipart/form-data'>
                  <input type="text" hidden value="<?php echo $var; ?>" name="nim">
                  <div class="form-group">
                    <span class="control-fileupload">
                      <label for="file">Choose a file :</label>
                      <input type="file" name="fileinput" required>
                    </span>
                  </div>
                  <button type="submit" class="btn btn-success">Upload File</button>
                </form>
              </div>
              <br>
              <br>
              <div class="alert alert-info" role="alert" style="font-family:sans-serif;background-color:#158873; color:white">Pembimbing</div>

              <div class="row" style="font-family: sans-serif;">
                <form action="module/ajukan-judul/update-pembimbing.php" method="POST" id="pembimbing">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="sel1">Pilihan Pembimbing 1:</label>
                      <select class="form-control" name='pembimbing1' required>
                        <option value="">Tidak Ada</option>
                        <?php
                        $query = "SELECT tbl_dosen.nip, tbl_dosen.nama_dosen FROM tbl_pembimbing join tbl_dosen on tbl_dosen.nip = tbl_pembimbing.nip WHERE tbl_pembimbing.no_pembimbing = '1'";
                        $result =  mysqli_query($connect, $query);
                        if ($result) {
                          while ($row = mysqli_fetch_array($result)) {
                            $selected = $pembimbing1 == $row['nip'] ? 'selected' : '';
                            echo '<option value="' . $row['nip'] . '"' . $selected . '>' . $row['nama_dosen'] . '</option>';
                          }
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="sel1">Pilihan Pembimbing 2:</label>
                      <select class="form-control" name='pembimbing2' required>
                        <option value="">Tidak Ada</option>
                        <?php
                        $query = "SELECT tbl_dosen.nip, tbl_dosen.nama_dosen FROM tbl_pembimbing join tbl_dosen on tbl_dosen.nip = tbl_pembimbing.nip WHERE tbl_pembimbing.no_pembimbing = '2'";
                        $result =  mysqli_query($connect, $query);
                        if ($result) {
                          while ($row = mysqli_fetch_array($result)) {
                            $selected = $pembimbing2 == $row['nip'] ? 'selected' : '';
                            echo '<option value="' . $row['nip'] . '"' . $selected . '>' . $row['nama_dosen'] . '</option>';
                          }
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </form>
              </div>
              <button type="submit" form="pembimbing" class="btn btn-success" style="font-family:sans-serif">Simpan Pembimbing</button>
              <br>
              <br>
              <div class="alert alert-info" role="alert" style="font-family:sans-serif;background-color:#158873; color:white">Kelas</div>
              <form action="module/ajukan-judul/update-kelas.php" method="POST" id="kelas">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="sel1" style="font-family:sans-serif">Kelas</label>
                      <select class="form-control" name='kelas' required>
                        <?php $i = 0;
                        foreach ($kKelas as $kelasku) {
                          if ($i == $kelas) {
                            echo "<option style='width:100%;' value='$i' selected='selected'>$kelasku</option>";
                          } else {
                            echo "<option style='width:100%;' value='$i'>$kelasku</option>";
                          }
                          $i++;
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <button type="submit" form="kelas" class="btn btn-success" style="font-family:sans-serif">Simpan Kelas</button>
              </form>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<script>
  $(function() {
    $('input[type=file]').change(function() {
      var t = $(this).val();
      var labelText = 'File : ' + t.substr(12, t.length);
      $(this).prev('label').text(labelText);
    })
  });
</script>