<div class="wrapper">
	<?php
		include 'app/Pendaftaran.php'; 
    	include 'template/sidebar.php'; 
    	include 'template/header.php';
  	?>
	<div class="content-wrapper">
		<div class="container-fluid">
			<section class="content-header">
				<h4><i class="fa fa-plus"></i> <b>PENDAFTARAN BARU</b></h4><br>
				<div class="panel panel-primary" style="border-top: 3px solid #3498db;">
					  <div class="panel-body">
							<div class="container-fluid">
								<div class="row">
									<form action="" method="POST" role="form">
										<input type="hidden" name="act" value="<?php echo $act; ?>">
										<input type="hidden" name="id" value="<?php echo $id; ?>">

										<div class="col-md-6">
											<div class="form-group">
												<label for="">Nama Pasien</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Nama Pasien.." name="nama">
											</div>

											<div class="form-group">
												<label for="">Alamat</label>
												<input type="text" class="form-control" required="required" name="alamat" placeholder="Masukan Alamat">
											</div>

											<div class="form-group">
												<label for="">Jenis Kelamin</label>
												<select class="form-control" name="gender" required="required">
													<option>---</option>
													<option>Pria</option>
													<option>Wanita</option>
												</select>
											</div>

											<div class="form-group">
												<label for="">Umur Pasien</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Umur Pasien.." name="umur">
											</div>

											<div class="form-group">
												<label for="">Telepon Pasien</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Telepon Pasien.." name="telepon">
											</div>											
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="">Keluhan Pasien</label>
												<textarea class="form-control" name="keluhan" placeholder="Masukan Keluhan Pasien..." rows="5"></textarea>
											</div>

											<div class="form-group">
												<label for="">Sakit Pasien</label>
												<textarea class="form-control" name="sakit" placeholder="Masukan Sakit Pasien..." rows="5"></textarea>
											</div>

											<div class="form-group">
												<label for="">TTL</label>
												<input type="date" class="form-control" name="tgl_lahir">
											</div>											
										</div>
										<div class="col-md-12">
											<hr>
											<button type="submit" name="next" class="col-md-12 btn btn-primary btn-lg">SELANJUTNYA</button>
										</div>
									</form>								
								</div>
							</div>
					  </div>
				</div>
		    </section>
		</div><br>
  	</div>
  	<?php include 'template/footer.php'; ?>
</div>