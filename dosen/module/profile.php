<?php
//include config
include_once('../library/config.php');
//include environment
include('../library/environment.php');
//include koneksi
include('../library/database.php');
//var session nidn
$var = $_SESSION['nip'];
//query
$query  = "SELECT * FROM tbl_dosen WHERE nip = '$var'";
$result =  mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
  $nidn          = $row['nip'];
  $nama_dosen       = $row['nama_dosen'];
  $tanggal_lahir     = $row['tanggal_lahir'];
  $email   = $row['email'];
  $no_telepon       = $row['no_telepon'];
}
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
          <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-user"></i> Profile Dosen</div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="text-center" width="15%">Atrribute</th>
                    <th class="text-center" width="35%">Value</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>nidn</td>
                    <td><?php echo $nidn ?></td>
                  </tr>
                  <tr>
                    <td>Nama Dosen</td>
                    <td><?php echo $nama_dosen ?></td>
                  </tr>
                  <tr>
                    <td>no. Telepon</td>
                    <td><?php echo $no_telepon ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>