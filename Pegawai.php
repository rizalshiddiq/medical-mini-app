<?php
	$table = 'Pegawai';
	$primaryKey = 'KodePegawai';
	$fill = 'Username, Password, NamaPegawai, AlamatPegawai, TeleponPegawai, GenderPegawai, Level';
	$id = '';
	$act = 'add';
	$username = $level = $nama = $alamat = $phone = $jenis_kelamin = '';

	$data = $db->query("SELECT * FROM $table");

	if (isset($_POST['simpan'])) {
		$act = $_POST['act'];
		$id = $_POST['id'];
		$username = $db->escape_string($_POST['username']);
		$password = $db->escape_string(md5($_POST['password']));
		$level = $db->escape_string($_POST['level']);
		$nama = $db->escape_string($_POST['nama']);
		$alamat = $db->escape_string($_POST['alamat']);
		$phone = $db->escape_string($_POST['phone']);
		$jenis_kelamin = $db->escape_string($_POST['jenis_kelamin']);

		switch ($act) {
			case 'add':					
					$query = $db->query("INSERT INTO $table($fill) VALUES ('$username', '$password', '$nama','$alamat', '$phone', '$jenis_kelamin', '$level')");
				break;

			case 'edit':
					$query = $db->query("UPDATE Pegawai SET Username = '$username', Password = '$password', NamaPegawai = '$nama', TeleponPegawai = '$phone', GenderPegawai = '$jenis_kelamin', Level = '$level' WHERE KodePegawai = '$id'");
				break;
		}

		if ($query) {
			URL::Redirect('pegawai');
		}else{
			$err = 'Maaf terjadi kesalahan, coba lagi!';
		}		
	}

	if (isset($_GET['id'])) {
		$act = $_GET['act'];
		$id = $_GET['id'];				
		switch ($act) {
			case 'delete':
					$query = $db->query("DELETE FROM Pegawai WHERE KodePegawai = '$id'");
					

					if ($query) {
						URL::Redirect('pegawai');
					}else{
						$err = 'Maaf terjadi kesalahan, coba lagi!';
					}		

				break;
			
			case 'edit':
					$query = $db->query("SELECT * FROM Pegawai WHERE KodePegawai = '$id'");
					$row = $query->fetch_assoc();

					$username = $row['Username'];
					$level = $row['Level'];
					$nama = $row['NamaPegawai'];
					$alamat = $row['AlamatPegawai'];
					$phone = $row['TeleponPegawai'];
					$jenis_kelamin = $row['GenderPegawai'];
					
				break;
		}
	}

