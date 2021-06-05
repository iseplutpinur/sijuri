<?php
//get nim
$nim = $_GET['nim'];
//include config
include_once('../library/config.php');
//include environment
include('../library/environment.php');
//include database
include('../library/database.php');
//query select where nim
$query = "SELECT * FROM tbl_mahasiswa WHERE nim ='$nim'";
$result =  mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
  $nim          = $row['nim'];
  $nama        = $row['nama_mhs'];
  $password    = $row['password'];
  $kode_tahun  = $row['kode_tahun'];
  $kode_jurusan = $row['kode_jurusan'];
  $semester     = $row['semester'];
}

?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
        <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-study"></i> Tambah Mahasiswa</div>
        <div class="panel-body">
          <form method="POST" action="module/mahasiswa/update-mahasiswa.php">

            <div class="form-group">
              <label for="judul">Nama Mahasiswa</label>
              <input type="text" name="nama_mhs" value="<?php echo $nama ?>" class="form-control" placeholder="Masukan Nama Mahasiswa." required>
              <input type="hidden" name="nim" value="<?php echo $nim ?>">
            </div>
            <div class="form-group">
              <label for="judul">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Masukan Password Mahasiswa.">
            </div>
            <div class="form-group">
              <label for="kode_tahun">Kode Tahun</label>
              <input type="text" name="kode_tahun" id="kode_tahun" value="<?php echo $kode_tahun ?>" class="form-control" placeholder="Masukan Kode Tahun." required>
            </div>
            <div class="form-group">
              <label for="kode_jurusan">Jurusan</label>
              <select name="kode_jurusan" id="kode_jurusan" class="form-control">
                <option value="Belum Dipilih">Belum Dipilih</option>
                <?php
                $query = "SELECT kode_jurusan, nama_jurusan FROM jurusan";
                $result =  mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {
                  $selected = $row['kode_jurusan'] == $kode_jurusan ? "selected" : "";
                  echo '<option value=" ' . $row['kode_jurusan'] . '" ' . $selected . '>' . $row['nama_jurusan'] . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="semester">Semester</label>
              <input type="number" name="semester" id="semester" value="<?php echo $semester ?>" class="form-control" placeholder="Masukan Semester Mahasiswa." required>
            </div>

            <button type="submit" class="btn btn-info btn-fill pull-right">Simpan Data</button>
            <a href="media.php?action=data-mahasiswa" class="btn btn-danger btn-fill pull-right" style="margin-right:5px">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>