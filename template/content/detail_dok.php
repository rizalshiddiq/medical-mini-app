<div class="wrapper">
	<?php 
		require 'app/config/config.php';
		include 'app/Dokter.php';
    	include 'template/sidebar.php'; 
    	include 'template/header.php';
  	?>
  	<div class="content-wrapper">
		<div class="container-fluid">
			<section class="content-header">
				<center>
				<h4><i></i> <b>PROFIL DOKTER</b></h4><br>
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary" style="border-top: 3px solid #3498db;">
					  	<div class="panel-body">
							<div class="container-fluid">
								<div class="row">
									<table class="table table-bordered table-striped">
							      		<tbody align="center">
							      			<?php 
					      						$query = $db->query("SELECT * FROM dokter WHERE KodeDkt = '$id'");
												$row = $query->fetch_assoc();
											?>
							      			<tr>	
								      			<th>NAMA LENGKAP</th>
								      			<th>:</th>
								      			<th><?php echo $row['NamaDkt']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>TANGGAL LAHIR</th>
								      			<th>:</th>
								      			<th><?php echo $row['TtlDkt']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>JENIS KELAMIN</th>
								      			<th>:</th>
								      			<th><?php echo $row['GenderDkt']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>SPESIALIS</th>
								      			<th>:</th>
								      			<th><?php echo $row['Spesialis']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>TEMPAT TINGGAL</th>
								      			<th>:</th>
								      			<th><?php echo $row['AlamatDkt']; ?></th>
								      		</tr>
								      		<tr>	
								      			<th>NO. TELPHON</th>
								      			<th>:</th>
								      			<th><?php echo "0".$row['TelpDkt']; ?></th>
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