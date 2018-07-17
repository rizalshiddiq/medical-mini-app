<?php
	$table = 'resep';
	$primaryKey = 'NomorResep';
	$fill = 'TanggalResep, KodePsn, KodePlk, TotalHarga, Bayar, Kembali';
	$id = '';
	$act = 'add';

	if (isset($_POST['next'])) {
		$act = $_POST['act'];

		$kode_obat = $db->escape_string($_POST['kode_obat']);
		$dosis = $db->escape_string($_POST['dosis']);
		
		switch ($act) {
			case 'add':
					$dokter_id = $_SESSION['KodeDkt'];
					$dokter = $db->query("SELECT * FROM dokter WHERE KodeDkt = 'dokter_id'");
					$dokter_row = $dokter->fetch_assoc();
					$poliklinik_id = $dokter_row['KodePlk'];
					$tanggal = date('Y-m-d');
					$kode_psn = $_SESSION['pendaftaran']['KodePsn'];
					// $nama_pasien = $_SESSION['pendaftaran']['NamaPsn'];
					$kode_dokter = $_SESSION['KodeDkt'];

					$db->query("INSERT INTO resep(TanggalResep, KodeDkt, KodePsn, KodePlk) VALUES ('$tanggal','$kode_dokter','$kode_psn','$poliklinik_id')");

					$insert_id = $db->insert_id;

					$db->query("INSERT INTO detail(NomorResep, KodeObat, Dosis) VALUES ('$insert_id','$kode_obat', '$dosis')");

					$obat = $db->query("SELECT * FROM obat WHERE KodeObat = '$kode_obat'");
					$row_obat = $obat->fetch_assoc();

					$jumlah_obat_sekarang = $row_obat['JumlahObat'];
					$harga_obat_satuan = $row_obat['HargaObat'];
					$jumlah_obat_baru = $jumlah_obat_sekarang-$dosis;
					$nama_obat = $row_obat['NamaObat'];

					$db->query("UPDATE obat SET JumlahObat = '$jumlah_obat_baru' WHERE KodeObat = '$kode_obat'");

					$harga = $dosis*$harga_obat_satuan;

					$db->query("UPDATE detail SET Harga = '$harga' WHERE NomorResep = '$insert_id'");
					$query = $db->query("UPDATE resep SET TotalHarga = '$harga' WHERE NomorResep = '$insert_id'");

					$_SESSION['pendaftaran']['total_bayar']	= $harga;
					$_SESSION['pendaftaran']['nama_obat']	= $nama_obat;
					$_SESSION['pendaftaran']['dosis']	= $dosis;
					$_SESSION['pendaftaran']['harga']	= $harga;
					$_SESSION['pendaftaran']['harga_satuan']	= $harga_obat_satuan;
					$_SESSION['pendaftaran']['nomor_resep']	= $insert_id;
				break;
		}

		if ($query) {
			?>
				<script>
					alert("Berhasil disimpan!");
					window.location.href = 'index.php?page=bayar';
				</script>
			<?php
		}else{
			$err = 'Maaf terjadi kesalahan, coba lagi!';
		}		
	}