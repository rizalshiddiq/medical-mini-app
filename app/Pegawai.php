<?php
	$table = 'user';
	$primaryKey = 'id_user';
	$fill = 'KodeDkt, nama, username, password, no_telp, alamat, level';
	$id = '';
	$act = 'add';
	$kode_dkt = $nama_user = $username = $password = $no_telp = $alamat = $level = '';

	$data = $db->query("SELECT * FROM $table");

	if (isset($_POST['simpan'])) {
		$act = $_POST['act'];
		$id = $_POST['id'];
		$nama_user = $db->escape_string($_POST['nama_user']);
		$username = $db->escape_string($_POST['username']);
		$password = $db->escape_string(md5($_POST['password']));
		$no_telp = $db->escape_string($_POST['no_telp']);
		$alamat = $db->escape_string($_POST['alamat']);
		$level = '1';
		$kode_dkt = '0';
		
		switch ($act) {
			case 'add':		
					$query = $db->query("INSERT INTO $table($fill) VALUES ('$kode_dkt', '$nama_user', '$username','$password', '$no_telp','$alamat', '$level')");
				break;

			case 'edit':
					$query = $db->query("UPDATE user SET KodeDkt = '$kode_dkt', nama = '$nama_user', username = '$username', password = '$password', no_telp = '$no_telp', alamat = '$alamat', level = '$level' WHERE id_user = '$id'");
				break;
		}

		if ($query) {
			?>
				<script>
					alert("Berhasil disimpan!");
					window.location.href = 'index.php?page=pegawai';
				</script>
			<?php
		}else{
			$err = 'Maaf terjadi kesalahan, coba lagi!';
		}		
	}

	if (isset($_GET['id'])) {
		$act = $_GET['act'];
		$id = $_GET['id'];				
		switch ($act) {
			case 'delete':
					$query = $db->query("DELETE FROM user WHERE id_user = '$id'");
					if ($query) {
						?>
							<script>
								window.location.href = 'index.php?page=pegawai';
							</script>
						<?php
					}else{
						$err = 'Maaf terjadi kesalahan, coba lagi!';
					}		

				break;
			
			case 'edit':
					$query = $db->query("SELECT * FROM user WHERE id_user = '$id'");
					$row = $query->fetch_assoc();

					$kode_dkt = $row['KodeDkt'];
					$nama_user = $row['nama'];
					$username = $row['username'];
					$password = $row['password'];
					$no_telp = $row['no_telp'];
					$alamat = $row['alamat'];
				break;
		}
	}
?>