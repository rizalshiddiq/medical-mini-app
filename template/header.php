<header class="main-header">
    <a href="app.php" class="logo text-blue">
      <span class="logo-mini"><b>MCC</b></span>
      <span class="logo-lg"><b>MECCA MEDIKA</b></span>
    </a>

    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="color: #3498db !important;">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php if ($_SESSION['level'] == '1') { ?>
              <img src="assets/adminlte/dist/img/avatar5.png" class="user-image" alt="User Image">
              <?php }else if($_SESSION['level'] == '2'){ ?>
              <img src="assets/adminlte/dist/img/avatar2.png" class="user-image" alt="User Image">
              <?php } ?>
              <span class="hidden-xs text-blue"><strong><?php echo $_SESSION['nama']; ?></strong></span>
            </a>
            <ul class="dropdown-menu">

              <li class="user-header header-blue">
                <?php if ($_SESSION['level'] == '1') { ?>
              <img src="assets/adminlte/dist/img/avatar5.png" class="user-image" alt="User Image">
              <?php }else{ ?>
              <img src="assets/adminlte/dist/img/avatar2.png" class="user-image" alt="User Image">
              <?php } ?>
                <!-- <img src="assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

                <p style="color: #fff !important;">
                  PT. Mecca Medika
                  <small>Jl. Brigjen Katamso No. 37 Subang, Jawa Barat</small>
                </p>
              </li>
              <li class="user-footer">
                 <div class="pull-right">
                  <a href="logout.php" class="btn btn-primary" onclick="return confirm('Anda yakin mau keluar?');">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>