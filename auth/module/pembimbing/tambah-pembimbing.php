<?php
$error = '';
$status_error = 'danger';
// cek apakah button subit telah di tekan
if (isset($_POST['submit'])) {
    $title_error = false;
    $dosen = $_POST['dosen'];
    $no_pembimbing = $_POST['no-pembimbing'];

    // kode untuk menyimpan data pembimbing baru

    // validasi pembimbing
    // 1. cek apakah Pembimbing Nomor di pilih
    if ($no_pembimbing != "") {
        // 2. cek apakah kode pembimbing sudah digunakan
        $result =  mysqli_query($connect, "SELECT * FROM tbl_pembimbing WHERE nip = '$dosen'");
        if ($result->num_rows == 0) {
            $query = "INSERT INTO tbl_pembimbing (id, nip, no_pembimbing) VALUES (NULL, '$dosen', '$no_pembimbing')";
            // 3. simpan ke database
            if (mysqli_query($connect, $query)) {
                $title_error = '</i> Success!</strong> Berhasil Menambahkan Data';
                $status_error = 'success';
            } else {
                $title_error = '</i> Warning!</strong> Gagal menambahkan data ke database';
            }
        } else {
            $title_error = '</i> Warning!</strong> Dosen Sudah Jadi Pemimbing';
        }
    } else {
        $title_error = '</i> Warning!</strong> Nomor Pembimbing Belum Dipilih.';
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
                            <label for="judul">Dosen Pembimbing</label>
                            <select name="dosen" class="form-control" id="dosen">
                                <option value="">Belum Dipilih</option>
                                <?php $query = "SELECT nip, nama_dosen FROM tbl_dosen";
                                $result =  mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <option value="<?php echo $row['nip']; ?>"><?php echo $row['nama_dosen']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul">Pembimbing Nomor</label>
                            <select name="no-pembimbing" class="form-control" id="no-pembimbing">
                                <option value="">Belum Dipilih</option>
                                <option value="1">Pembimbing 1</option>
                                <option value="2">Pembimbing 2</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Simpan Data</button>
                        <a href="media.php?action=dosen-pembimbing" class="btn btn-danger btn-fill pull-right" style="margin-right:5px">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("no-pembimbing").value = '<?php echo isset($_POST['no-pembimbing']) ? $_POST['no-pembimbing'] : ""; ?>';
    document.getElementById("dosen").value = '<?php echo isset($_POST['dosen']) ? $_POST['dosen'] : ""; ?>';
</script>