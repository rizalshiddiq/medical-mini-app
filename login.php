<?php
	session_start();
	include 'app/config/config.php';

	if (isset($_SESSION['login'])) {
		header('location:index.php');
	}

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$cek = $db->query("SELECT * FROM pegawai WHERE username = '$username' AND password = '$password'");
		if ($cek->num_rows == 1) {
			$row = $cek->fetch_assoc();

			$_SESSION['login'] = true;
			$_SESSION['username'] = $row['username'];
			$_SESSION['level'] = $row['level'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['user_id'] = $row['id_user'];
			$_SESSION['KodeDkt'] = $row['KodeDkt'];

			header('location:index.php');	
		}else{
			$error = 'Akun tidak ditemukan';
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN | Mecca Medika</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootswatch.min.css">
	<link rel="stylesheet" type="text/css" href="assets/adminlte/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<style type="text/css">
		body{
			background: #eef;
		}
		label {
			color: #000;
		}
	</style>
</head>
<body>
	<aside class="main-sidebar sidebar-blue">
    	<!-- sidebar: style can be found in sidebar.less -->
    	<section class="sidebar">
			<div class="container" style="margin-top: 0px;">
				<div class="row">
					<div class="col-md-4 col-md-offset-6">
						<h3 align="center" style="font-family: 'Verdana';"><b>MECCA MEDIKA</b></h3>
						<center><small style="color: #000; font-size: 13px;">Jl. Pegangsaan Timur No. 56 Subang Jawa Barat</small></center><hr>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title" align="center"><b>FORM LOGIN</b></h3>
							</div>
							<div class="panel-body">
								<?php if (isset($error)) { ?>
									<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<strong>Peringatan!</strong> <?php echo $error; ?> ...
									</div>					
								<?php } ?>

								<form action="" method="POST" class="form-horizontal" role="form">
									<div class="form-group">
										<div class="col-md-12">
											<label for="username">Username</label>
											<input type="text" name="username" class="form-control" placeholder="Masukan Username" required autofocus>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<label for="password">Password</label>
											<input type="password" name="password" class="form-control" placeholder="********" required>
										</div>
									</div>
									<hr>
									<div class="form-group">
										<div class="col-md-12">
											<button type="submit" class="btn btn-primary col-md-12" name="login">Login</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</aside>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>