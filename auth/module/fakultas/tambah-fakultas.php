<?php
$error = '';
$status_error = 'danger';
// cek apakah button subit telah di tekan
if (isset($_POST['submit'])) {
    $title_error = false;
    $status_aktif = $_POST['status-aktif'];
    $kode_fakultas = $_POST['kode-fakultas'];
    $nama_fakultas = $_POST['nama-fakultas'];

    // kode untuk menyimpan data fakultas baru

    // validasi fakultas
    // 1. cek apakah status sudah di pilih
    if ($status_aktif != "") {
        // 2. cek apakah kode fakultas sudah digunakan
        $result =  mysqli_query($connect, "SELECT kode_fakultas FROM fakultas WHERE kode_fakultas = '$kode_fakultas'");
        if ($result->num_rows == 0) {
            $query = "INSERT INTO fakultas (kode_fakultas, nama_fakultas, Aktif) VALUES ('$kode_fakultas', '$nama_fakultas', '$status_aktif')";
            // 3. simpan ke database
            if (mysqli_query($connect, $query)) {
                $title_error = '</i> Success!</strong> Berhasil Menambahkan Data';
                $status_error = 'success';
            } else {
                $title_error = '</i> Warning!</strong> Gagal menambahkan data ke database';
            }
        } else {
            $title_error = '</i> Warning!</strong> Kode Fakultas sudah digunakan.';
        }
    } else {
        $title_error = '</i> Warning!</strong> Status Fakultas Belum Dipilih.';
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
                            <label for="judul">Kode Fakultas</label>
                            <input type="text" name="kode-fakultas" class="form-control" value="<?php echo isset($_POST['kode-fakultas']) ? $_POST['kode-fakultas'] : ""; ?>" placeholder="Masukan Kode Fakultas" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Nama Fakultas</label>
                            <input type="text" name="nama-fakultas" class="form-control" value="<?php echo isset($_POST['nama-fakultas']) ? $_POST['nama-fakultas'] : ""; ?>" placeholder="Masukan Nama Fakultas" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Status Aktif</label>
                            <select name="status-aktif" class="form-control" id="status">
                                <option value="">Belum Dipilih</option>
                                <option value="Y">Aktif</option>
                                <option value="N">Tidak Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Simpan Data</button>
                        <a href="media.php?action=fakultas" class="btn btn-danger btn-fill pull-right" style="margin-right:5px">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("status").value = '<?php echo isset($_POST['status-aktif']) ? $_POST['status-aktif'] : ""; ?>';
</script>