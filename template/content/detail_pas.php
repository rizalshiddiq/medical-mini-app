<div class="wrapper">
	<?php 
		require 'app/config/config.php';
		include 'app/Pasien.php';
    	include 'template/sidebar.php'; 
    	include 'template/header.php';
  	?>
  	<div class="content-wrapper">
		<div class="container-fluid">
			<section class="content-header">
				<center>
				<h4><i></i> <b>PROFIL PASIEN</b></h4><br>
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary" style="border-top: 3px solid #3498db;">
					  	<div class="panel-body">
							<div class="container-fluid">
								<div class="row">
									<table class="table table-bordered table-striped">
							      		<tbody align="center">
							      			<?php 
					      						$query = $db->query("SELECT * FROM pasien WHERE KodePsn = '$id'");
												$row = $query->fetch_assoc();
											?>
							      			<tr>	
								      			<th>NAMA LENGKAP</th>
								      			<th>:</th>
								      			<th><?php echo $row['NamaPsn']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>TANGGAL LAHIR</th>
								      			<th>:</th>
								      			<th><?php echo $row['TtlPsn']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>JENIS KELAMIN</th>
								      			<th>:</th>
								      			<th><?php echo $row['GenderPsn']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>UMUR PASIEN</th>
								      			<th>:</th>
								      			<th><?php echo $row['UmurPsn']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>TEMPAT TINGGAL</th>
								      			<th>:</th>
								      			<th><?php echo $row['AlamatPsn']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>NO. TELPHON</th>
								      			<th>:</th>
								      			<th><?php echo "0".$row['TelpPsn']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>SAKIT</th>
								      			<th>:</th>
								      			<th><?php echo $row['SakitPsn']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>OBAT</th>
								      			<th>:</th>
								      			<th><?php echo $_SESSION['pendaftaran']['nama_obat']; ?></th>
								      		</tr>
								      	</tbody>
								     </table>							
								</div>
							</div>
					  	</div>
					</div>
					<a href="index.php?page=dokter" class="btn btn-primary btn-lg col-md-12"><i class="fa fa-arrow-left"></i> KEMBALI</a>
				</div>
				</center>
		    </section>
		</div><br>
  	</div>
  	<?php include 'template/footer.php'; ?>