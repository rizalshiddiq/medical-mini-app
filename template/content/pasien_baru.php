<div class="wrapper">
	<?php 
		include 'app/Pasien.php'; 
    	include 'template/sidebar.php'; 
    	include 'template/header.php';
  	?>
	<div class="content-wrapper">
		<div class="container-fluid">
			<section class="content-header">
				<h4><i class="fa fa-plus"></i> <b>PASIEN BARU</b></h4><br>
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
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Nama Pasien.." name="nama" value="<?php echo $nama; ?>">
											</div>
											<div class="form-group">
												<label for="">Tanggal Lahir</label>
												<input type="date" class="form-control" id="" required="required" placeholder="" name="ttl" value="<?php echo $ttl; ?>">
											</div>
											<div class="form-group">
												<label for="">Jenis Kelamin</label>
												<select class="form-control" name="gender" required="required" value="<?php echo $gender; ?>">
													<option>---</option>
													<option>Pria</option>
													<option>Wanita</option>
												</select>
											</div>
											<div class="form-group">
												<label for="">Umur</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Umur Pasien.." name="umur" value="<?php echo $umur; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Telephon</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Nomor Telepon.." name="telp" value="<?php echo $telp; ?>">
											</div>
											<div class="form-group">
												<label for="">Sakit</label>
												<input type="text" class="form-control" rows="3" required="required" name="sakit" value="<?php echo $sakit; ?>">
											</div>
											<div class="form-group">
												<label for="">Alamat</label>
												<input type="text" class="form-control" rows="5" required="required" name="alamat" value="<?php echo $alamat; ?>">
											</div>
										</div>
										<div class="col-md-12">
											<hr>
											<button type="submit" name="simpan" class="col-md-12 btn btn-primary btn-lg">TAMBAHKAN</button>
										</div>
									</form>
								</div>
							</div>
					  </div>
				</div>
		    </section>
		</div><br>
    <!-- <section class="content">
      Content
    </section> -->
  	</div>
  	<?php include 'template/footer.php'; ?>
</div>