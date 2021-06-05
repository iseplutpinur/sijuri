      <?php
      $header_title = "SIJURI Kelompok 5"; // default
      $footer_title = 'SIJURI © 2021 Kelompok 5, All Rights Reserved.'; // default
      $result =  mysqli_query($connect, "SELECT isi FROM tbl_pengaturan WHERE nama='header'");
      if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
          $header_title = $row['isi'];
        }
      }

      $result =  mysqli_query($connect, "SELECT isi FROM tbl_pengaturan WHERE nama='footer'");
      if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
          $footer_title = $row['isi'];
        }
      }
      $prodi_nav = "0||0||0||0";
      $result =  mysqli_query($connect, "SELECT isi FROM tbl_pengaturan WHERE nama='prodi_nav'");
      if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
          $prodi_nav = $row['isi'];
        }
      }
      // memisahkan kode jurusan
      $prodi_navs = explode("||", $prodi_nav);

      // mengambil data jurusan
      $query = "SELECT kode_jurusan, nama_jurusan  FROM jurusan";
      $result =  mysqli_query($connect, $query);
      $str_nav = '';
      $jurusans = [];
      while ($row = mysqli_fetch_array($result)) {
        $str_nav .= in_array($row['kode_jurusan'], $prodi_navs) ? '<li><a href="index.php?action=judul&kode_jurusan=' . $row['kode_jurusan'] . '" style="color:#fff"><i class="fa fa-folder-open-o"></i> ' . $row['nama_jurusan'] . '</a></li>' : '';
      }
      ?>

      <footer>
        <p><?= $footer_title; ?></p>
      </footer>
      </div>
      <script src="<?php echo $config['base_url'] ?>assets/js/jquery.min.js"></script>
      <script src="<?php echo $config['base_url'] ?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo $config['base_url'] ?>assets/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
      <script src="<?php echo $config['base_url'] ?>assets/js/ie10-viewport-bug-workaround.js"></script>
      <script src="<?php echo $config['base_url'] ?>assets/js/ie-emulation-modes-warning.js"></script>
      <script type="text/javascript">
        $(function() {
          $("#judul").dataTable();

          $('#main-navbar').append(`<?= $str_nav ?>`)
        });
        document.title = '<?= $header_title ?>';
      </script>
      </body>

      </html>