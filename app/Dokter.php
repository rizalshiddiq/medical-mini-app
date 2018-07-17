<?php
	$table = 'dokter';
	$primaryKey = 'KodeDkt';
	$fill = 'NamaDkt, Spesialis, AlamatDkt, TelpDkt, KodePlk, Tarif, TtlDkt, GenderDkt';
	$id = '';
	$act = 'add';
	$nama = $spesialis = $alamat = $telp = $kodeplk = $tarif = $ttl = $gender = $username = $password = '';

	$data = $db->query("SELECT * FROM $table");

	if (isset($_POST['simpan'])) {
		$act = $_POST['act'];
		$id = $_POST['id'];
		$nama = $db->escape_string($_POST['nama']);
		$spesialis = $db->escape_string($_POST['spesialis']);
		$alamat = $db->escape_string($_POST['alamat']);
		$telp = $db->escape_string($_POST['telp']);
		$kodeplk = $db->escape_string($_POST['kodeplk']);
		$tarif = $db->escape_string($_POST['tarif']);
		$ttl = $db->escape_string($_POST['ttl']);
		$gender = $db->escape_string($_POST['gender']);
		$level = '2';
		
		switch ($act) {
			case 'add':					
					$username = $db->escape_string($_POST['username']);
					$password = $db->escape_string(md5($_POST['password']));

					$db->query("INSERT INTO $table($fill) VALUES ('$nama', '$spesialis', '$alamat','$telp', '$kodeplk', '$tarif','$ttl','$gender')");

					$insert_id = $db->insert_id;
					$query = "INSERT INTO user(KodeDkt, nama, username, password, no_telp, alamat, level) VALUES ('$insert_id', '$nama', '$username','$password', 'telp','$alamat', '$level')";
				break;

			case 'edit':
					$query = "UPDATE dokter SET NamaDkt = '$nama', Spesialis = '$spesialis', AlamatDkt = '$alamat', TelpDkt = '$telp', KodePlk = '$kodeplk', Tarif = '$tarif', TtlDkt = '$ttl', GenderDkt = '$gender' WHERE KodeDkt = '$id'";
				break;
		}

		if ($db->query($query)) {
			?>
				<script>
					alert("Berhasil disimpan!");
					window.location.href = 'index.php?page=dokter';
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
					$query = $db->query("DELETE FROM dokter WHERE KodeDkt = '$id'");
					

					if ($query) {
						?>
							<script>
								window.location.href = 'index.php?page=dokter';
							</script>
						<?php
					}else{
						$err = 'Maaf terjadi kesalahan, coba lagi!';
					}		
				break;
			
			case 'edit':
					$query = $db->query("SELECT * FROM dokter WHERE KodeDkt = '$id'");
					$row = $query->fetch_assoc();

					$nama = $row['NamaDkt'];
					$alamat = $row['AlamatDkt'];
					$spesialis = $row['Spesialis'];
					$telp = $row['TelpDkt'];
					$kodeplk = $row['KodePlk'];
					$tarif = $row['Tarif'];
					$ttl = $row['TtlDkt'];
					$gender = $row['GenderDkt'];
					$act = 'edit';
				break;

			case 'detail':
					$query = $db->query("SELECT * FROM dokter WHERE KodeDkt = '$id'");
					$row = $query->fetch_assoc();

					$nama = $row['NamaDkt'];
					$alamat = $row['AlamatDkt'];
					$spesialis = $row['Spesialis'];
					$telp = $row['TelpDkt'];
					$kodeplk = $row['KodePlk'];
					$tarif = $row['Tarif'];
					$ttl = $row['TtlDkt'];
					$gender = $row['GenderDkt'];
					$act = 'edit';
				break;
		}
	}
?>