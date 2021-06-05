<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
                <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-study"></i> Tambah Dosen</div>
                <div class="panel-body">
                    <form method="POST" action="module/dosen/simpan-dosen.php">
                        <div class="form-group">
                            <label for="judul">NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="Masukan NIP." required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Nama Dosen</label>
                            <input type="text" name="nama_dosen" class="form-control" placeholder="Masukan Nama Dosen." required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password Dosen." required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir." required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukan Email." required>
                        </div>
                        <div class="form-group">
                            <label for="judul">No. Telepon</label>
                            <input type="text" name="no_telepon" class="form-control" placeholder="Masukan No. Telepon." required>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Simpan Data</button>
                        <a href="media.php?action=dashboard" class="btn btn-danger btn-fill pull-right" style="margin-right:5px">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>