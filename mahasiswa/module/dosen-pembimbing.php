<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
        <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873; font-family:sans-serif"> <?= $icon . " " . $title; ?></div>
        <div class=" panel-body">
          <div class="row">
            <div class="col-lg-6">
              <h4 style="font-family:sans-serif">Pembimbing 1</h4>
              <table id=" data-table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
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
              <h4 style="font-family:sans-serif">Pembimbing 2</h4>
              <table id=" data-mahasiswa" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
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