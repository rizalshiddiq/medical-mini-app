<div class="wrapper">
	<?php 
		include 'app/Resep.php'; 
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
												<label for="">Obat</label>
												<select name="kode_obat" class="form-control">
													<option value="">Pilih Obat</option>
													<?php $obat = $db->query("SELECT * FROM obat"); ?>
													<?php while ($row = $obat->fetch_assoc()) { ?>
														<option value="<?php echo $row['KodeObat']; ?>"><?php echo $row['NamaObat']; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-md-6">											
											<div class="form-group">
												<label for="">Dosis</label>
												<input type="text" name="dosis" placeholder="Dosis..." class="form-control">
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