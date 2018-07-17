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
		      				<a href="index.php?page=dokter_baru" class="btn btn-default"><i class="fa fa-plus"></i> Tambah Dokter</a>
		      			</div>

		      			<!-- <div class="navbar-form pull-right">
		      				<form action="" method="POST" class="form-inline" role="form">
		      					<div class="form-group">
		      						<input type="text" class="form-control" id="" placeholder="Cari dokter disini...">
		      					</div>
		      					<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
		      				</form>
		      			</div>
 -->
		      		</div>
		      	</div>
		      	<div class="panel panel-primary">
		      		<div class="panel-heading">
		      			<b>DATA DOKTER</b> | Mecca Medika
		      		</div>
		      		<div class="panel-body">
		      			<table class="table table-bordered table-striped">
				      		<thead>
				      			<tr>
				      				<th>NO</th>	
					      			<th>NAMA</th>
					      			<th>SPESIALIS</th>
					      			<th>TTL</th>
					      			<!-- <th>GENDER</th> -->
					      			<th>ALAMAT</th>
					      			<!-- <th>TELP</th> -->
					      			<!-- <th>TARIF</th> -->
					      			<!-- <th>KODE POLIKLINIK</th> -->
					      			<th style="text-align:center;">OPSI</th>
					      		</tr>
					      	</thead>
					      	
					        <tbody>
					        <?php 
					      		$query 	= $db->query("SELECT * FROM dokter");
					      		$i 		= 1;
					      		while($data = $query->fetch_assoc()){
							?>
					      		<tr>
					      			<td><?php echo $i++; ?></td>
					      			<td><?php echo $data['NamaDkt']; ?></td>
					      			<td><?php echo $data['Spesialis']; ?></td>
					      			<td><?php echo $data['TtlDkt']; ?></td>
					      			<!-- <td><?php echo $data['GenderDkt']; ?></td> -->
					      			<td><?php echo $data['AlamatDkt']; ?></td>
					      			<!-- <td><?php echo $data['TelpDkt']; ?></td> -->
					      			<!-- <td><?php echo $data['Tarif']; ?></td> -->
					      			<!-- <td><?php echo $data['KodePlk']; ?></td> -->
					      			<td align="center">
					      				<a href="index.php?page=dokter_baru&act=edit&id=<?php echo $data['KodeDkt']; ?>" onClick="return confirm('Anda yakin data ini diupdate?');" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
					      				<a href="index.php?page=dokter_baru&act=delete&id=<?php echo $data['KodeDkt']; ?>" onClick="return confirm('Anda yakin data ini perlu dihapus?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
					      				<a href="index.php?page=detail_dok&act=detail&id=<?php echo $data['KodeDkt']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-user"></i> Profil</a>
					      			</td>
					      		</tr>
					      		<?php } ?>
					      	</tbody>
					      	
				      	</table>
		      		</div>
		      	</div>
		      	<div class="panel panel-default">
		      		<div class="panel-body">
		      			<a href="index.php?page=dokter_baru" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Dokter</a>
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