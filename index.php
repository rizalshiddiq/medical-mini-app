<?php 
	session_start();
	include 'app/config/config.php';

	if (empty($_SESSION['login'])) {
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mecca Medika | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/adminlte/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/adminlte/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/adminlte/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="assets/adminlte/plugins/datatables/dataTables.bootstrap.css">
</head>
<body class="hold-transition skin-black sidebar-mini">
	<div id="page">
		<?php 
			if (empty($_GET['page'])) {
				include("template/home.php");
			} else {
				include("template/content/".$_GET['page'].".php");
			}
		?>

	</div>
	
	<!-- jQuery 2.2.3 -->
	<script src="assets/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="assets/adminlte/bootstrap/js/bootstrap.min.js"></script>
	<!-- Data Tables -->
	<script src="assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="assets/adminlte/plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="assets/adminlte/dist/js/app.min.js"></script>
	<!-- Sparkline -->
	<script src="assets/adminlte/plugins/sparkline/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- SlimScroll 1.3.0 -->
	<script src="assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- ChartJS 1.0.1 -->
	<script src="assets/adminlte/plugins/chartjs/Chart.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="assets/adminlte/dist/js/pages/dashboard2.js"></script>

	<script>
      $(function() {
        $("#example1").DataTable();
      });
    </script>

</body>
</html>