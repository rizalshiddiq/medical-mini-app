<aside class="main-sidebar sidebar-blue">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php if ($_SESSION['level'] == '1') { ?>
          <img src="assets/adminlte/dist/img/avatar5.png" class="img-circle" alt="User Image">
          <?php }else{ ?>
          <img src="assets/adminlte/dist/img/avatar2.png" class="img-circle" alt="User Image">
          <?php } ?>
        </div>
        <div class="pull-left info">
          <p style="text-transform: uppercase;">Hallo, <?php echo $_SESSION['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online </a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu sidebar-menu-blue">
        <li class="header sidebar-blue1">- DATA -</li>

        <li>
          <a href="app.php">
            <i class="fa fa-building-o"></i> <span>HOMEPAGE</span>
          </a>
        </li>

        <?php if ($_SESSION['level'] == '1'): ?>
          <li>
            <a href="app.php?page=dokter">
              <i class="fa fa-user"></i> <span>DOKTER</span>
            </a>
          </li>

          <li>
            <a href="app.php?page=obat">
              <i class="fa fa-database"></i> <span>OBAT</span>
            </a>
          </li> 

          <li>
            <a href="app.php?page=pegawai">
              <i class="fa fa-users"></i> <span>PEGAWAI</span>
            </a>
          </li>   

          <li>
          <a href="app/backup.php">
            <i class="fa fa-database"></i> <span>BACKUP DATABASE</span>
          </a>
        </li>      
        <?php else: ?>
          <li>
            <a href="app.php?page=pendaftaran">
              <i class="fa fa-book"></i> <span>PENDAFTARAN</span>
            </a>
          </li>                   
          <li>
            <a href="app.php?page=pasien">
              <i class="fa fa-indent"></i> <span>RIWAYAT PASIEN</span>
            </a>
          </li>                   
        <?php endif ?>

        <li class="header sidebar-blue1">- ABOUT -</li>

        <li>
          <a href="app.php?page=profil">
            <i class="fa fa-home"></i> <span>PROFIL</span>
          </a>
        </li>   
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>