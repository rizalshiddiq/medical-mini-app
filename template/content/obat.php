<div class="wrapper">
	<?php 
		require 'app/config/config.php';
    	include 'template/sidebar.php'; 
    	include 'template/header.php';
  	?>
	<div class="content-wrapper">
		<div class="container-fluid">
			<section class="content-header">
				<br>
				<div class="panel panel-default">
		      		<div class="panel-body">
		      			<div class="navbar-form pull-left">
		      				<a href="index.php?page=obat_baru" class="btn btn-default"><i class="fa fa-plus"></i> Tambah Obat</a>
		      			</div>

		      			<!-- <div class="navbar-form pull-right">
		      				<form action="" method="POST" class="form-inline" role="form">
		      					<div class="form-group">
		      						<input type="text" class="form-control" id="" placeholder="Cari obat disini...">
		      					</div>
		      					<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
		      				</form>
		      			</div> -->

		      		</div>
		      	</div>
		      	<div class="panel panel-primary">
		      		<div class="panel-heading">
		      			<b>DATA obat</b> | Mecca Medika
		      		</div>
		      		<div class="panel-body">
		      			<table class="table table-bordered table-striped">
				      		<thead>
				      			<tr>
				      				<th>NO</th>	
					      			<th>NAMA OBAT</th>
					      			<th>JENIS OBAT</th>
					      			<th>KATEGORI</th>
					      			<th>HARGA OBAT (RP)</th>
					      			<th>STOK</th>
					      			<th style="text-align:center;">OPSI</th>
					      		</tr>
					      	</thead>
					      	
					        <tbody>
					        <?php 
					      		$query 	= $db->query("SELECT * FROM obat");
					      		$i 		= 1;
					      		while($data = $query->fetch_assoc()){
							?>
					      		<tr>
					      			<td><?php echo $i++; ?></td>
					      			<td><?php echo $data['NamaObat']; ?></td>
					      			<td><?php echo $data['JenisObat']; ?></td>
					      			<td><?php echo $data['Kategori']; ?></td>
					      			<td><?php echo $data['HargaObat']; ?></td>
					      			<td><?php echo $data['JumlahObat']; ?></td>
					      			<td align="center">
					      				<a href="index.php?page=obat_baru&act=edit&id=<?php echo $data['KodeObat']; ?>" onClick="return confirm('Anda yakin data ini perlu diperbarui?');" class="btn btn-success"><i class="fa fa-pencil
					      				"></i> Edit</a>
					      				<a href="index.php?page=obat_baru&act=delete&id=<?php echo $data['KodeObat']; ?>" onClick="return confirm('Anda yakin data ini perlu dihapus?');" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
					      			
					      			</td>
					      		</tr>
					      		<?php } ?>
					      	</tbody>
					      	
				      	</table>
		      		</div>
		      	</div>
		      	<div class="panel panel-default">
		      		<div class="panel-body">
		      			<a href="index.php?page=obat_baru" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah obat</a>
		      		</div>
		      	</div>
		    </section>
		</div>
    <!-- <section class="content">
      Content
    </section> -->
  	</div>
  	<?php include 'template/footer.php'; ?>
</div>