<div class="wrapper">

  <?php 
    require 'app/config/config.php';
    include 'sidebar.php'; 
    include 'header.php';
  ?>


  <div class="content-wrapper">
    <section class="content-header">
      <div class="container">
      <div class="col-md-4">
        <div class="box box-danger">
            <div class="panel-body">
              <?php echo"<b>Sekarang Tanggal: ".date("d-m-Y")."</b>"; ?>
            </div>
        </div>
      </div></div>
      <div class="col-md-12">
        <div class="col-md-5">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"> Obat Terlaris</h3>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Obat</th>
                    <th class="text-center">Stok</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php 
                      $query  = $db->query("SELECT * FROM obat ORDER BY JumlahObat ASC");
                      $i    = 1;
                      while($data = $query->fetch_assoc()){ ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['NamaObat']; ?></td>
                    <td><?php echo $data['JumlahObat']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="box box-success">
            <div class="panel-heading">
              <h3 class="panel-title"> Obat Termahal</h3>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Obat</th>
                    <th class="text-center">Harga</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php 
                      $query  = $db->query("SELECT * FROM obat ORDER BY HargaObat DESC");
                      $i    = 1;
                      while($data = $query->fetch_assoc()){ ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['NamaObat']; ?></td>
                    <td><?php echo $data['HargaObat']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <!-- Content -->
    </section>
  </div>

</div>