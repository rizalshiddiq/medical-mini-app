<div class="wrapper">
	<?php 
		// include 'app/Pendaftaran.php'; 
    	include 'template/sidebar.php'; 
    	include 'template/header.php';
  	?>
	<div class="content-wrapper">
		<div class="container-fluid">
			<section class="content-header">
				<center>
				<h4><i></i> <b>RINCIAN BELANJA</b></h4><br>
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary" style="border-top: 3px solid #3498db;">
					  	<div class="panel-body">
							<div class="container-fluid">
								<div class="row">
									<table class="table table-bordered table-striped">
							      		<tbody align="center">
							      			<!-- <tr>	
								      			<th>NAMA PASIEN</th>
								      			<th>:</th>
								      			<th><?php echo $_SESSION['pendaftaran']['nama_pasien']; ?></th>
								      		</tr> -->
							      			<tr>	
								      			<th>NAMA OBAT</th>
								      			<th>:</th>
								      			<th><?php echo $_SESSION['pendaftaran']['nama_obat']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>DOSIS</th>
								      			<th>:</th>
								      			<th><?php echo $_SESSION['pendaftaran']['dosis']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>HARGA SATUAN</th>
								      			<th>:</th>
								      			<th><?php echo $_SESSION['pendaftaran']['harga_satuan']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>TOTAL HARGA</th>
								      			<th>:</th>
								      			<th><?php echo $_SESSION['pendaftaran']['total_bayar']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>UANG YANG DIBAYAR</th>
								      			<th>:</th>
								      			<th><?php echo $_SESSION['pendaftaran']['bayar']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>KEMBALIAN</th>
								      			<th>:</th>
								      			<th><?php echo $_SESSION['pendaftaran']['kembalian']; ?></th>
								      		</tr>
								      	</tbody>
								     </table>							
								</div>
							</div>
					  	</div>
					</div>
					<a href="index.php" class="btn btn-primary btn-lg col-md-12"><i class="fa fa-check fa-lg"></i> SELESAI</a>
				</div>
				</center>
		    </section>
		</div><br>
  	</div>
  	<?php include 'template/footer.php'; ?>
</div>