		<?php
			//include config
			include_once('../library/config.php');

			if($_SESSION['prodi'] == '0205')
			{
				$prodi = '1';

			}elseif($_SESSION['prodi'] == '0204'){

				$prodi = '2';

			}else{

				$prodi = '0';

			}
		?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
				    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
				      <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Ajukan Judul Baru</div>
				      <div class="panel-body">
				      <form action="module/simpan-judul-baru.php" method="POST">
				      		<input type="hidden" name="nim" value="<?php echo $_SESSION['nim'] ?>">
				      		<input type="hidden" name="mahasiswa" value="<?php echo $_SESSION['nama_mhs'] ?>">
				      		<input type="hidden" name="prodi" value="<?php echo $prodi ?>">
                            <div class="form-group">
                                <label for="judul">Judul Skripsi 1</label>
                                <input type="text" name = "judul1" class="form-control" placeholder="Masukan Judul Skripsi Anda." required>
                            </div>
                            <div class="form-group">
                                <label for="judul">Descriptions Judul 1</label>
                                <textarea rows="5" name="desjudul1" class="form-control" placeholder="Here can be your description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul Skripsi 2</label>
                                <input type="text" name = "judul2" class="form-control" placeholder="Masukan Judul Skripsi Anda." required>
                            </div>
                            <div class="form-group">
                                <label for="judul">Descriptions Judul 2</label>
                                <textarea rows="5" name="desjudul2" class="form-control" placeholder="Here can be your description"></textarea>
                            </div>

							<div class="form-group">
							  <label for="sel1">Kelas:</label>
								<select class="form-control" name='kelas' style="width:50%" required>
								<?php $i=0;
								foreach($kKelas as $kelasku){
									if($i==3){
										echo "<option style='width:100%;' value='$i' selected='selected'>$kelasku</option>";}
									else{
										echo "<option style='width:100%;' value='$i'>$kelasku</option>";
									}
									$i++;
								}
								?>
								</select>
							</div>

							<div class="form-group">
							  <label for="sel1">Pilihan Pembimbing 1:</label>
							<select class="form-control" name='pembimbing1' style="width:50%" required>
								<?php $i=0;
									foreach($kPembimbing1 as $p){
										echo "<option value='$i'>$p</option>";
										$i++;
									}
								?>
							</select>
							</div>

							<div class="form-group">
							  <label for="sel1">Pilihan Pembimbing 2:</label>
							<select class="form-control" name='pembimbing2' style="width:50%" required>
								<?php $i=0;
									foreach($kPembimbing2 as $p){
										echo "<option value='$i'>$p</option>";
										$i++;
									}
								?>
							</select>
							</div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Simpan Data</button>
                            <a href="media.php?action=judul-skripsi" class="btn btn-danger btn-fill pull-right" style="margin-right:5px">Batal</a>
                            <?php
                //include config
                include('./library/config.php');
                //include environment
                include('./library/environment.php');
                //include koneksi database
                include('./library/database.php');
                //get dosen
                //$dosen = print_r($pembimbing);
                echo '<br>';
                //$kelas = print_r($kelas);
                //query table
                $query  = "SELECT *  FROM skripsi";
                $no     = 1;
                $result =  mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {

                  $nim         = $row['nim'];
                  $nama        = $row['mahasiswa'];
                  $judul1      = $row['judul1'];
                  $judul2      = $row['judul2'];
                  $status1     = $row['status_judul1'];
                  $status2     = $row['status_judul2'];

                  if($status1 == '0')
                  {
                    $button1 = '<div class="alert alert-warning" style="font-family:"ubuntu">
                      Belum Dikoreksi
                    </div>';

                  }elseif($status1 == '1'){
                    $button1 = '<div class="alert alert-success" style="font-family:"ubuntu">
                      Judul Diterima
                    </div>';
                  }elseif($status1 == '2'){
                    $button1 = '<div class="alert alert-danger" style="font-family:"ubuntu">
                      Judul Ditolak
                    </div>';
                  }else{
                    $button1 = '<div class="alert alert-warning" style="font-family:"ubuntu">
                      Status Tidak Diketahui
                    </div>';
                  }
                  //status judul 2
                  if($status2 == '0')
                  {
                    $button2 = '<div class="alert alert-warning" style="font-family:"ubuntu">
                      Belum Dikoreksi
                    </div>';

                  }elseif($status2 == '1'){
                    $button2 = '<div class="alert alert-success" style="font-family:"ubuntu">
                      Judul Diterima
                    </div>';
                  }elseif($status2 == '2'){
                    $button2 = '<div class="alert alert-danger" style="font-family:"ubuntu">
                      Judul Ditolak
                    </div>';
                  }else{
                    $button2 = '<div class="alert alert-warning" style="font-family:"ubuntu">
                      Status Tidak Diketahui
                    </div>';
                  }

                  ?>
				      </form>
				      </div>
				     </div>
				     </div>
				</div>
			</div>
		</div>