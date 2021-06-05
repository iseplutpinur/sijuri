<?php
$error = '';
$status_error = 'danger';
// cek apakah ada data yang akan dihapus
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM tbl_pembimbing WHERE tbl_pembimbing.id = '$id'";
    $result = mysqli_query($connect, $query);

    // cek apakah ada baris di database yang berubah
    if (mysqli_affected_rows($connect) > 0) {
        $title_error = '</i> Success!</strong> Berhasil menghapus Data';
        $status_error = 'success';
    } else {
        $title_error = '</i> Warning!</strong> Gagal menghapus Data';
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
                    <a href="media.php?action=tambah-pembimbing" class="btn btn-md btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>Pembimbing 1</h4>
                            <table id="data-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //query select where nip
                                    $query = "SELECT tbl_pembimbing.id, tbl_dosen.nip, tbl_dosen.nama_dosen FROM tbl_pembimbing join tbl_dosen on tbl_dosen.nip = tbl_pembimbing.nip WHERE tbl_pembimbing.no_pembimbing = '1'";
                                    $result =  mysqli_query($connect, $query);
                                    $no = 1;
                                    if ($result) {
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $row['nip'] ?></td>
                                                <td><?php echo $row['nama_dosen'] ?></td>
                                                <td class="text-center">
                                                    <a href="media.php?action=dosen-pembimbing&delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data pembimbing ?')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>

                                    <?php
                                            $no++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <h4>Pembimbing 2</h4>
                            <table id="data-mahasiswa" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //query select where nip
                                    $query = "SELECT tbl_pembimbing.id,tbl_dosen.nip, tbl_dosen.nama_dosen FROM tbl_pembimbing join tbl_dosen on tbl_dosen.nip = tbl_pembimbing.nip WHERE tbl_pembimbing.no_pembimbing = '2'";
                                    $result =  mysqli_query($connect, $query);
                                    $no = 1;
                                    if ($result) {
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $row['nip'] ?></td>
                                                <td><?php echo $row['nama_dosen'] ?></td>
                                                <td class="text-center">
                                                    <a href="media.php?action=dosen-pembimbing&delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data pembimbing ?')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>

                                    <?php
                                            $no++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>