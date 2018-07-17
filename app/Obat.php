<?php
	$table = 'obat';
	$primaryKey = 'KodeObat';
	$fill = 'NamaObat, JenisObat, Kategori, HargaObat, JumlahObat';
	$id = '';
	$act = 'add';
	$nama = $jenis = $kategori = $harga = $jumlah = '';

	$data = $db->query("SELECT * FROM $table");

	if (isset($_POST['simpan'])) {
		$act = $_POST['act'];
		$id = $_POST['id'];
		$nama = $db->escape_string($_POST['nama']);
		$jenis = $db->escape_string($_POST['jenis']);
		$kategori = $db->escape_string($_POST['kategori']);
		$harga = $db->escape_string($_POST['harga']);
		$jumlah = $db->escape_string($_POST['jumlah']);
		
		switch ($act) {
			case 'add':					
					$query = $db->query("INSERT INTO $table($fill) VALUES ('$nama', '$jenis','$kategori', '$harga','$jumlah')");
				break;

			case 'edit':
					$query = $db->query("UPDATE obat SET NamaObat = '$nama', JenisObat = '$jenis', Kategori = '$kategori', HargaObat = '$harga', JumlahObat = '$jumlah' WHERE KodeObat = '$id'");
				break;
		}

		if ($query) {
			?>
				<script>
					alert("Berhasil disimpan!");
					window.location.href = 'index.php?page=obat';
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
					$query = $db->query("DELETE FROM obat WHERE KodeObat = '$id'");
					

					if ($query) {
						?>
							<script>
								window.location.href = 'index.php?page=obat';
							</script>
						<?php
					}else{
						$err = 'Maaf terjadi kesalahan, coba lagi!';
					}		

				break;
			
			case 'edit':
					$query = $db->query("SELECT * FROM obat WHERE KodeObat = '$id'");
					$row = $query->fetch_assoc();

					$nama = $row['NamaObat'];
					$jenis = $row['JenisObat'];
					$kategori = $row['Kategori'];
					$harga = $row['HargaObat'];
					$jumlah = $row['JumlahObat'];
				
				break;
		}
	}
?>