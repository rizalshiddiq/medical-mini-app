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
				
		      	<div class="panel panel-primary">
		      		<div class="panel-heading">
		      			<b>DATA PASIEN</b> | Mecca Medika
		      		</div>
		      		<div class="panel-body">
		      			<table class="table table-bordered table-striped">
				      		<thead>
				      			<tr>
				      				<th>NO</th>	
					      			<th>NAMA PASIEN</th>
					      			<th>GENDER</th>
					      			<!-- <th>UMUR</th> -->
					      			<!-- <th>TTL</th> -->
					      			<th>SAKIT</th>
					      			<th>ALAMAT</th>
					      			<!-- <th>TELEPHON</th> -->
					      			<th style="text-align:center;">OPSI</th>
					      		</tr>
					      	</thead>
					      	
					        <tbody>
					        <?php 
					      		$query 	= $db->query("SELECT * FROM pasien");
					      		$i 		= 1;
					      		while($data = $query->fetch_assoc()){
							?>
					      		<tr>
					      			<td><?php echo $i++; ?></td>
					      			<td><?php echo $data['NamaPsn']; ?></td>
					      			<td><?php echo $data['GenderPsn']; ?></td>
					      			<!-- <td><?php echo $data['UmurPsn']; ?></td>
					      			<td><?php echo $data['TtlPsn']; ?></td> -->
					      			<td><?php echo $data['SakitPsn']; ?></td>
					      			<td><?php echo $data['AlamatPsn']; ?></td>
					      			<!-- <td><?php echo $data['TelpPsn']; ?></td> -->
					      			<td align="center">
					      				<a href="index.php?page=pasien_baru&act=edit&id=<?php echo $data['KodePsn']; ?>" onClick="return confirm('Anda yakin data ini perlu diperbarui?');" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
					      				<a href="index.php?page=pasien_baru&act=delete&id=<?php echo $data['KodePsn']; ?>" onClick="return confirm('Anda yakin data ini akan dihapus?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
					      				<a href="index.php?page=detail_pas&act=edit&id=<?php echo $data['KodePsn']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Riwayat Sakit</a>
					      			</td>
					      		</tr>
					      		<?php } ?>
					      	</tbody>
					      	
				      	</table>
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