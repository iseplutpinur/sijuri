<?php
$error = '';
$status_error = 'danger';
// cek apakah ada kode jurusan yang dikirimkan
if (!isset($_GET['kode_jurusan'])) {
    echo "<script>window.location.href = 'media.php?action=jurusan'; </script>";
}

$kode_jurusan = $_GET['kode_jurusan'];
$query = "SELECT * FROM jurusan WHERE kode_jurusan ='$kode_jurusan'";
$result =  mysqli_query($connect, $query);

// cek apakah data ada
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $status_aktif = $row['Aktif'];
        $kode_jurusan = $row['kode_jurusan'];
        $kode_fakultas = $row['kode_fakultas'];
        $nama_jurusan = $row['nama_jurusan'];
        $akreditasi = $row['akreditasi'];
    }
} else {
    echo "<script>window.location.href = 'media.php?action=jurusan'; </script>";
}

// menyimpan data jurusan yang baru
// cek apakah button subit telah di tekan
if (isset($_POST['submit'])) {
    $title_error = false;
    $status_aktif = $_POST['status-aktif'];
    $kode_jurusan = $_POST['kode-jurusan'];
    $kode_fakultas = $_POST['kode-fakultas'];
    $nama_jurusan = $_POST['nama-jurusan'];
    $akreditasi = $_POST['akreditasi'];

    // kode untuk menyimpan data jurusan baru

    // validasi jurusan
    // 1. cek apakah status sudah di pilih
    if ($status_aktif != "") {
        $query = "UPDATE jurusan SET nama_jurusan = '$nama_jurusan', Aktif = '$status_aktif', kode_fakultas = '$kode_fakultas', akreditasi = '$akreditasi'  WHERE kode_jurusan = '$kode_jurusan'";

        // 3. simpan ke database
        if (mysqli_query($connect, $query)) {
            $title_error = '</i> Success!</strong> Berhasil mengedit Data';
            $status_error = 'success';
        } else {
            $title_error = '</i> Warning!</strong> Gagal mengedit data ke database';
        }
    } else {
        $title_error = '</i> Warning!</strong> Status jurusan Belum Dipilih.';
    }


    // masukan title error jika ada
    $error =  $title_error ? '<div class="alert alert-' . $status_error . ' alert-dismissible" role="alert">
    				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    				<strong><i class="fa fa-times-circle">' . $title_error . '
    		  </div>' : '';
}


?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
                <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <?= $icon . " " . $title; ?></div>
                <div class="panel-body">
                    <?= $error; ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="judul">Fakultas</label>
                            <select name="kode-fakultas" class="form-control" id="kode-fakultas">
                                <option value="">Belum Dipilih</option>
                                <?php
                                // mengambail data fakultas untuk form tambah jurusan
                                $query = "SELECT * FROM fakultas";
                                $result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    $selected = '';
                                    if ($kode_fakultas == $row['kode_fakultas']) $selected = "selected";
                                    echo '<option value="' . $row['kode_fakultas'] . '" ' . $selected . '>' . $row['nama_fakultas'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul">Kode jurusan</label>
                            <input type="text" name="kode-jurusan" class="form-control" value="<?php echo $kode_jurusan ?>" placeholder="Masukan Kode jurusan" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="judul">Nama jurusan</label>
                            <input type="text" name="nama-jurusan" class="form-control" value="<?php echo $nama_jurusan; ?>" placeholder="Masukan Nama jurusan" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Akreditasif</label>
                            <select name="akreditasi" class="form-control" id="akreditasi">
                                <option value="Belum">Belum</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul">Status Aktif</label>
                            <select name="status-aktif" class="form-control" id="status-aktif">
                                <option value="">Belum Dipilih</option>
                                <option value="Y">Aktif</option>
                                <option value="N">Tidak Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Simpan Data</button>
                        <a href="media.php?action=jurusan" class="btn btn-danger btn-fill pull-right" style="margin-right:5px">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // select option jika penah di isi sebelumnya
    const akreditasi = '<?php echo $akreditasi ?>';

    document.getElementById("status-aktif").value = '<?php echo $status_aktif; ?>';
    document.getElementById("akreditasi").value = (akreditasi) ? akreditasi : "Belum";
</script>