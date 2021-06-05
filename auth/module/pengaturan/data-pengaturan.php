<?php
// menyimpan header dan footer kedalam database
if (isset($_POST['submit'])) {
    $header_title = $_POST['header'];
    $result = mysqli_query($connect, "UPDATE tbl_pengaturan SET isi = '$header_title' WHERE tbl_pengaturan.nama = 'header'");

    $footer_title = $_POST['footer'];
    $result = mysqli_query($connect, "UPDATE tbl_pengaturan SET isi = '$footer_title' WHERE tbl_pengaturan.nama = 'footer'");

    $prodi_nav = $_POST['jurusan1'] . "||" . $_POST['jurusan2'] . "||" . $_POST['jurusan3'] . "||" . $_POST['jurusan4'];
    $result = mysqli_query($connect, "UPDATE tbl_pengaturan SET isi = '$prodi_nav' WHERE tbl_pengaturan.nama = 'prodi_nav'");
}
$prodi_nav = "0||0||0||0";
$result =  mysqli_query($connect, "SELECT isi FROM tbl_pengaturan WHERE nama='prodi_nav'");
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $prodi_nav = $row['isi'];
    }
} else {
    $result =  mysqli_query($connect, "INSERT INTO tbl_pengaturan (id, nama, isi, keterangan) VALUES (NULL, 'prodi_nav', '$prodi_nav', 'Mengatur Navigasi Halaman Utama Menu Prodi')");
}
$prodi_navs = explode("||", $prodi_nav);
$jurusan1 = $prodi_navs[0];
$jurusan2 = $prodi_navs[1];
$jurusan3 = $prodi_navs[2];
$jurusan4 = $prodi_navs[3];

// menyiapkan data pengaturan
$query = "SELECT kode_jurusan, nama_jurusan  FROM jurusan";
$result =  mysqli_query($connect, $query);
$jurusans = [];
while ($row = mysqli_fetch_array($result)) {
    $jurusans[] = ['kode_jurusan' => $row['kode_jurusan'], 'nama_jurusan' => $row['nama_jurusan']];
}
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
                <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <?= $icon . " " . $title; ?></div>
                <div class="panel-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="header">Nama Aplikasi</label>
                            <input type="text" name="header" id="header" class="form-control" value="<?php echo $header_title ?>" placeholder="Nama Aplikasi" required>
                        </div>
                        <div class="form-group">
                            <label for="footer">Footer Aplikasi</label>
                            <textarea rows="5" name="footer" class="form-control" placeholder="Footer Aplikasi" id="footer"><?php echo $footer_title ?></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h6 style="text-transform: capitalize;">Jurusan di bar navigasi halaman utama</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="jurusan1">Jurusan 1</label>
                                <select name="jurusan1" id="jurusan1" class="form-control">
                                    <option value="">Belum Dipilih</option>
                                    <?php foreach ($jurusans as $jurusan) :
                                        $selected = $jurusan1 == $jurusan['kode_jurusan'] ? 'selected' : '';
                                    ?>
                                        <option value="<?= $jurusan['kode_jurusan'] ?>" <?= $selected; ?>><?= $jurusan['nama_jurusan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="jurusan2">Jurusan 2</label>
                                <select name="jurusan2" id="jurusan2" class="form-control">
                                    <option value="">Belum Dipilih</option>
                                    <?php foreach ($jurusans as $jurusan) :
                                        $selected = $jurusan2 == $jurusan['kode_jurusan'] ? 'selected' : '';
                                    ?>
                                        <option value="<?= $jurusan['kode_jurusan'] ?>" <?= $selected; ?>><?= $jurusan['nama_jurusan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="jurusan3">Jurusan 3</label>
                                <select name="jurusan3" id="jurusan3" class="form-control">
                                    <option value="">Belum Dipilih</option>
                                    <?php foreach ($jurusans as $jurusan) :
                                        $selected = $jurusan3 == $jurusan['kode_jurusan'] ? 'selected' : '';
                                    ?>
                                        <option value="<?= $jurusan['kode_jurusan'] ?>" <?= $selected; ?>><?= $jurusan['nama_jurusan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="jurusan4">Jurusan 4</label>
                                <select name="jurusan4" id="jurusan4" class="form-control">
                                    <option value="">Belum Dipilih</option>
                                    <?php foreach ($jurusans as $jurusan) :
                                        $selected = $jurusan4 == $jurusan['kode_jurusan'] ? 'selected' : '';
                                    ?>
                                        <option value="<?= $jurusan['kode_jurusan'] ?>" <?= $selected; ?>><?= $jurusan['nama_jurusan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <br>
                                <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Update Pengaturan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>