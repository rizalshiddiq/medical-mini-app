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
				<h3>Berikut data yang berdasarkan pencarian: </h3>
		      	<div class="panel panel-primary">
		      		<div class="panel-heading">
		      			<b>DATA OBAT</b> | Mecca Medika
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
					        	$data_pencarian = $db->query("SELECT * FROM obat");
					      		$i 		= 1;
					      		foreach($data_pencarian as $result){
							?>
					      		<tr>
					      			<td><?php echo $i++; ?></td>
					      			<td><?php echo $result['NamaObat']; ?></td>
					      			<td><?php echo $result['JenisObat']; ?></td>
					      			<td><?php echo $result['Kategori']; ?></td>
					      			<td><?php echo $result['HargaObat']; ?></td>
					      			<td><?php echo $result['JumlahObat']; ?></td>
					      			<td align="center">
					      				<a href="index.php?page=obat_baru&act=edit&id=<?php echo $data['KodeObat']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
					      				<a href="index.php?page=obat_baru&act=delete&id=<?php echo $data['KodeObat']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
					      				<a href="#" class="btn btn-primary"><i class="fa fa-database"></i> Detail Obat</a>
					      			</td>
					      		</tr>
					      		<?php } ?>
					      	</tbody>
					      	
				      	</table>
		      		</div>
		      	</div>
		      	<div class="panel panel-default">
		      		<div class="panel-body">
		      			<a href="index.php?page=obat" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali Ke Tabel Obat</a>
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