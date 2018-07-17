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
		      			<b>DATA PEGAWAI</b> | Mecca Medika
		      		</div>
		      		<div class="panel-body">
		      			<table class="table table-bordered table-striped">
				      		<thead>
				      			<tr>
				      				<th>NO</th>
					      			<th>NAMA PEGAWAI</th>
					      			<th>USERNAME</th>
					      			<th>ALAMAT</th>
					      			<!-- <th>NO. TELP</th> -->
					      			<th style="text-align:center;">OPSI</th>
					      		</tr>
					      	</thead>
					      	
					        <tbody>
					        <?php 
					      		$query 	= $db->query("SELECT * FROM user");
					      		$i 		= 1;
					      		while($data = $query->fetch_assoc()){
							?>
					      		<tr>
					      			<td><?php echo $i++; ?></td>
					      			<td><?php echo $data['nama']; ?></td>
					      			<td><?php echo $data['username']; ?></td>
					      			<td><?php echo $data['alamat']; ?></td>
					      			<!-- <td><?php echo $data['no_telp']; ?></td> -->
					      			<td align="center">
					      				<a href="index.php?page=pegawai_baru&act=edit&id=<?php echo $data['id_user']; ?>" onClick="return confirm('Anda yakin data ini perlu diperbarui?');" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
					      				<a href="index.php?page=pegawai_baru&act=delete&id=<?php echo $data['id_user']; ?>" onClick="return confirm('Anda yakin data akan dihapus?');" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
					      				<a href="index.php?page=detail_dok&act=detail&id=<?php echo $data['KodeDkt']; ?>" class="btn btn-primary"><i class="fa fa-user"></i> Profil</a>
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