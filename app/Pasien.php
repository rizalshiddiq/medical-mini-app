<?php
	$table = 'pasien';
	$primaryKey = 'KodePsn';
	$fill = 'NamaPsn, AlamatPsn, GenderPsn, UmurPsn, TelpPsn, KeluhanPsn, SakitPsn, TtlPsn';
	$id = '';
	$act = 'add';
	$nama = $alamat = $gender = $umur = $telp = $keluhan = $sakit = $ttl = '';

	$data = $db->query("SELECT * FROM $table");

	if (isset($_POST['simpan'])) {
		$act = $_POST['act'];
		$id = $_POST['id'];
		$nama = $db->escape_string($_POST['nama']);
		$alamat = $db->escape_string($_POST['alamat']);
		$gender = $db->escape_string($_POST['gender']);
		$umur = $db->escape_string($_POST['umur']);
		$telp = $db->escape_string($_POST['telp']);
		$keluhan = $db->escape_string($_POST['keluhan']);
		$sakit = $db->escape_string($_POST['sakit']);
		$ttl = $db->escape_string($_POST['ttl']);

		switch ($act) {
			case 'add':					
					$query = $db->query("INSERT INTO $table($fill) VALUES ('$nama', '$alamat', '$gender','$umur', '$telp', '$keluhan', '$sakit', '$ttl')");
				break;

			case 'edit':
					$query = $db->query("UPDATE pasien SET NamaPsn = '$username', AlamatPsn = 'alamat', GenderPsn = '$gender', UmurPsn = '$umur', TelpPsn = '$telp', KeluhanPsn = '$keluhan', SakitPsn = '$sakit', TtlPsn = '$ttl' WHERE KodePsn = '$id'");
				break;
		}

		if ($query) {
			?>
				<script>
					alert("Berhasil disimpan!");
					window.location.href = 'index.php?page=pasien'
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
					$query = $db->query("DELETE FROM pasien WHERE KodePsn = '$id'");
					

					if ($query) {
						?>
							<script>
								window.location.href = 'index.php?page=pasien'
							</script>
						<?php
					}else{
						$err = 'Maaf terjadi kesalahan, coba lagi!';
					}		

				break;
			
			case 'edit':
					$query = $db->query("SELECT * FROM pasien WHERE KodePsn = '$id'");
					$row = $query->fetch_assoc();

					$nama = $row['NamaPsn'];
					$alamat = $row['AlamatPsn'];
					$gender = $row['GenderPsn'];
					$umur = $row['UmurPsn'];
					$telp = $row['TelpPsn'];
					$keluhan = $row['KeluhanPsn'];
					$sakit = $row['SakitPsn'];
					$ttl = $row['TtlPsn'];
					
				break;
		}
	}

