<div class="wrapper">
	<?php 
		include 'app/Pegawai.php'; 
    	include 'template/sidebar.php'; 
    	include 'template/header.php';
  	?>
	<div class="content-wrapper">
		<div class="container-fluid">
			<section class="content-header">
				<h4><i class="fa fa-plus"></i> <b>PEGAWAI BARU</b></h4><br>
				<div class="panel panel-primary" style="border-top: 3px solid #3498db;">
					  <div class="panel-body">
							<div class="container-fluid">
								<div class="row">
									<form action="" method="POST" role="form" enctype="multipart/form-data">
										<input type="hidden" name="act" value="<?php echo $act; ?>">
										<input type="hidden" name="id" value="<?php echo $id; ?>">

										<div class="col-md-6">
											<div class="form-group">
												<label for="">Nama User</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Nama User.." name="nama_user" value="<?php echo $nama_user; ?>">
											</div>
											<div class="form-group">
												<label for="">Username</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Username User.." name="username" value="<?php echo $username; ?>">
											</div>
											<div class="form-group">
												<label for="">Password</label> 
												<input type="password" class="form-control" id="" required="required" placeholder="Masukan Password User.." name="password" value="<?php echo $password; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">No Telphon</label>
												<input type="number" class="form-control" id="" required="required" placeholder="Masukan Telphon User.." name="no_telp" value="<?php echo $no_telp; ?>">
											</div>
											<div class="form-group">
												<label for="">Alamat</label>
												<input type="text" class="form-control" required="required" name="alamat" placeholder="Masukan Alamat" value="<?php echo $alamat; ?>">
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