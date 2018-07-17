<div class="wrapper">
	<?php 
		require 'app/Dokter.php';
    	include 'template/sidebar.php'; 
    	include 'template/header.php';
  	?>
	<div class="content-wrapper">
		<div class="container-fluid">
			<section class="content-header">
				<h4><i class="fa fa-plus"></i> <b> DOKTER BARU</b></h4><br>
				<div class="panel panel-primary" style="border-top: 3px solid #3498db;">
					  <div class="panel-body">
							<div class="container-fluid">
								<div class="row">
									<form action="" method="POST" role="form">
										<input type="hidden" name="act" value="<?php echo $act; ?>">
										<input type="hidden" name="id" value="<?php echo $id; ?>">
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Nama Dokter</label>
												<input type="text" name="nama" required="required" class="form-control" id="" placeholder="Masukan Nama Dokter.." value="<?php echo $nama; ?>">
											</div>
											<div class="form-group">
												<label for="">Spesialis</label>
												<input type="text" name="spesialis" required="required" class="form-control" id="" placeholder="Masukan Spesialis Dokter.." value="<?php echo $spesialis; ?>">
											</div>
											<div class="form-group">
												<label for="">TTL</label>
												<input type="date" name="ttl" required="required" class="form-control" id="" placeholder="Masukan TTL Pasien.." value="<?php echo $ttl; ?>">
											</div>
											<?php if (isset($_GET['id'])) {
												$disabled = "disabled='disabled'";
											}else{
												$disabled = '';
											} ?>
											<div class="form-group">
												<label for="">Username</label>
												<input type="text" class="form-control" name="username" required="required" value="<?php echo $username; ?>" <?php echo $disabled; ?>>
											</div>

											<div class="form-group">
												<label for="">Password</label>
												<input type="password" class="form-control" name="password" required="required" value="<?php echo $password; ?>" <?php echo $disabled; ?>>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Jenis Kelamin</label>
												<select class="form-control" name="gender" required="required" value="<?php echo $gender; ?>">
													<option>---</option>
													<option>Pria</option>
													<option>Wanita</option>
												</select>
											</div>
											<div class="form-group">
												<label for="">Tarif (Rp)</label>
												<input type="text" name="tarif" required="required" class="form-control" id="" placeholder="Masukan Tarif Dokter.." value="<?php echo $tarif; ?>">
											</div>
											<div class="form-group">
												<label for="">No. Telp</label>
												<input type="text" name="telp" required="required" class="form-control" id="" placeholder="Masukan No Telphon.." value="<?php echo $telp; ?>">
											</div>
											<div class="form-group">
												<label for="">Alamat</label>
												<input type="text" class="form-control" name="alamat" required="required" rows="5" value="<?php echo $alamat; ?>">
											</div>
											<div class="form-group">
												<label for="">Poliklinik</label>
												<select name="kodeplk" class="form-control">
													<option value="">Pilih Poliklinik</option>
													<?php $poliklinik = $db->query("SELECT * FROM poliklinik"); ?>
													<?php while ($row = $poliklinik->fetch_assoc()) { ?>
														<option value="<?php echo $row['KodePlk']; ?>"><?php echo $row['NamaPlk']; ?></option>
													<?php } ?>
												</select>
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