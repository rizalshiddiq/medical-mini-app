<?php
	$table = 'pasien';
	$primaryKey = 'KodePsn';
	$fill = 'NamaPsn, AlamatPsn, GenderPsn, UmurPsn, TelpPsn, KeluhanPsn, SakitPsn, TtlPsn';
	$id = '';
	$act = 'add';

	if (isset($_POST['next'])) {
		$act = $_POST['act'];

		$nama = $db->escape_string($_POST['nama']);
		$alamat = $db->escape_string($_POST['alamat']);
		$gender = $db->escape_string($_POST['gender']);
		$umur = $db->escape_string($_POST['umur']);
		$telepon = $db->escape_string($_POST['telepon']);
		$keluhan = $db->escape_string($_POST['keluhan']);
		$sakit = $db->escape_string($_POST['sakit']);
		$tanggal_lahir = $db->escape_string($_POST['tgl_lahir']);
		
		switch ($act) {
			case 'add':
					$query = $db->query("INSERT INTO $table($fill) VALUES ('$nama', '$alamat','$gender', '$umur','$telepon','$keluhan','$sakit','$tanggal_lahir')");

					$insert_id = $db->insert_id;
					// $_SESSION['pendaftaran']['NamaPsn'] = $nama_pasien;
					$_SESSION['pendaftaran']['KodePsn']	= $insert_id;				
				break;
		}

		if ($query) {
			?>
				<script>
					alert("Berhasil disimpan!");
					window.location.href = 'index.php?page=resep';
				</script>
			<?php
		}else{
			$err = 'Maaf terjadi kesalahan, coba lagi!';
		}		
	}