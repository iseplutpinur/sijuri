<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
        <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-study"></i> Data Dosen</div>
        <div class="panel-body">
          <a href="media.php?action=tambah-dosen" class="btn btn-md btn-success" style="margin-bottom:10px"><i class="fa fa-plus"></i> Tambah Data</a>
          <table id="data-table" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Dosen</th>
                <th>Email</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
              <?php
              //include config
              include_once('../library/config.php');
              //include environment
              include('../library/environment.php');
              //include database
              include('../library/database.php');
              //query select where nip
              $query = "SELECT * FROM tbl_dosen";
              $result =  mysqli_query($connect, $query);
              $no = 1;
              while ($row = mysqli_fetch_array($result)) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nip'] ?></td>
                  <td><?php echo $row['nama_dosen'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td class="text-center">
                    <a href="media.php?action=edit-dosen&nip=<?php echo $row['nip'] ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                    <a href="module/dosen/hapus-dosen.php?&nip=<?php echo $row['nip'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data dosen ?')"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>

              <?php
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>