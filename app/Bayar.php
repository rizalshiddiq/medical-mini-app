<?php
	$table = 'resep';
	$primaryKey = 'NomorResep';
	$fill = 'TanggalResep, KodePsn, KodePlk, TotalHarga, Bayar, Kembali';
	$id = '';
	$act = 'add';

	if (isset($_POST['next'])) {
		$act = $_POST['act'];

		$bayar = $db->escape_string($_POST['bayar']);

		switch ($act) {
			case 'add':
				$id = $_SESSION['pendaftaran']['nomor_resep'];

				$query = "UPDATE resep SET Bayar = '$bayar' WHERE NomorResep = '$id'";

				$kembalian = $_SESSION['pendaftaran']['total_bayar'] - $bayar;
				$_SESSION['pendaftaran']['kembalian']	= $kembalian;
				$_SESSION['pendaftaran']['bayar']	= $bayar;

				break;
		}

		if ($query) {
			?>
				<script>
					alert("Berhasil disimpan!");
					window.location.href = 'index.php?page=info_terakhir';
				</script>
			<?php
		}else{
			$err = 'Maaf terjadi kesalahan, coba lagi!';
		}		
	}