		<?php
		//include config
		include_once('../library/config.php');
		?>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); font-family:sans-serif">
							<div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-note2"></i> Ajukan Judul Baru</div>
							<div class="panel-body">
								<div class="container">
									<div class="row">
										<form action="module/ajukan-judul/simpan-judul-baru.php" method="POST" enctype='multipart/form-data'>
											<div class="row">

												<div class="col-lg-6">
													<div class="form-group">
														<label for="judul">Judul Skripsi 1</label>
														<input type="text" name="judul1" class="form-control" placeholder="Masukan Judul Skripsi Anda." required>
													</div>
													<div class="form-group">
														<label for="judul">Descriptions Judul 1</label>
														<textarea rows="5" name="desjudul1" class="form-control" placeholder="Here can be your description"></textarea>
													</div>
													<div class="form-group">
														<label for="sel1">Pilihan Pembimbing 1:</label>
														<select class="form-control" name='pembimbing1' required>
															<?php
															$query = "SELECT tbl_dosen.nip, tbl_dosen.nama_dosen FROM tbl_pembimbing join tbl_dosen on tbl_dosen.nip = tbl_pembimbing.nip WHERE tbl_pembimbing.no_pembimbing = '1'";
															$result =  mysqli_query($connect, $query);
															if ($result) {
																while ($row = mysqli_fetch_array($result)) {
																	echo "<option value=" . $row['nip'] . ">" . $row['nama_dosen'] . "</option>";
																}
															}
															?>
														</select>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="judul">Judul Skripsi 2</label>
														<input type="text" name="judul2" class="form-control" placeholder="Masukan Judul Skripsi Anda." required>
													</div>
													<div class="form-group">
														<label for="judul">Descriptions Judul 2</label>
														<textarea rows="5" name="desjudul2" class="form-control" placeholder="Here can be your description"></textarea>
													</div>
													<div class="form-group">
														<label for="sel1">Pilihan Pembimbing 2:</label>
														<select class="form-control" name='pembimbing2' required>
															<?php $i = 0;
															$query = "SELECT tbl_pembimbing.id, tbl_dosen.nip, tbl_dosen.nama_dosen FROM tbl_pembimbing join tbl_dosen on tbl_dosen.nip = tbl_pembimbing.nip WHERE tbl_pembimbing.no_pembimbing = '2'";
															$result =  mysqli_query($connect, $query);
															if ($result) {
																while ($row = mysqli_fetch_array($result)) {
																	echo "<option value=" . $row['nip'] . ">" . $row['nama_dosen'] . "</option>";
																}
															}
															?>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<label for="sel1">Kelas:</label>
														<select class="form-control" name='kelas' required>
															<?php $i = 0;
															foreach ($kKelas as $kelasku) {
																if ($i == 3) {
																	echo "<option style='width:100%;' value='$i' selected='selected'>$kelasku</option>";
																} else {
																	echo "<option style='width:100%;' value='$i'>$kelasku</option>";
																}
																$i++;
															}
															?>
														</select>
													</div>
												</div>
												<div class="col-lg-6">
													<!--file input example -->
													<div class="form-group">
														<label for="sel1">Upload File Lampiran</label>
														<span class="control-fileupload">
															<label for="file">Choose a file :</label>
															<input type="file" name="fileinput">
														</span>
													</div>
												</div>
											</div>
											<button type="submit" class="btn btn-info btn-fill pull-right">Simpan Data</button>
											<a href="media.php?action=judul-skripsi" class="btn btn-danger btn-fill pull-right" style="margin-right:5px">Batal</a>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(function() {
				$('input[type=file]').change(function() {
					var t = $(this).val();
					var labelText = 'File : ' + t.substr(12, t.length);
					$(this).prev('label').text(labelText);
				})
			});
		</script>