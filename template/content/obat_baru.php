<div class="wrapper">
	<?php 
		include 'app/Obat.php'; 
    	include 'template/sidebar.php'; 
    	include 'template/header.php';
  	?>
	<div class="content-wrapper">
		<div class="container-fluid">
			<section class="content-header">
				<h4><i class="fa fa-plus"></i> <b>OBAT BARU</b></h4><br>
				<div class="panel panel-primary" style="border-top: 3px solid #3498db;">
					  <div class="panel-body">
							<div class="container-fluid">
								<div class="row">
									<form action="" method="POST" role="form">
										<input type="hidden" name="act" value="<?php echo $act; ?>">
										<input type="hidden" name="id" value="<?php echo $id; ?>">

										<div class="col-md-6">
											<div class="form-group">
												<label for="">Nama Obat</label>
												<input type="text" autofocus class="form-control" id="" required="required" placeholder="Masukan Nama Obat.." name="nama" value="<?php echo $nama; ?>">
											</div>
											<div class="form-group">
												<label for="">Jenis Obat</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Jenis Obat.." name="jenis" value="<?php echo $jenis; ?>">
											</div>
											<div class="form-group">
												<label for="">Kategori</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Kategori Obat." name="kategori" value="<?php echo $kategori; ?>">
											</div>
											<div class="form-group">
												<label for="">Harga Obat</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Masukan Harga Satuan.." name="harga" value="<?php echo $harga; ?>">
											</div>
											<div class="form-group">
												<label for="">Stok</label>
												<input type="text" class="form-control" id="" required="required" placeholder="Stok Obat" name="jumlah" value="<?php echo $jumlah; ?>">
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