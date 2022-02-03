  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>DASHBOARD UTAMA</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Pramuka </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row">
      <div class="content col-md-6">
          <div class="container">
              <div class="container-fluid">
                  <!-- DONUT CHART -->
                  <div class="card card-danger">
                      <div class="card-header">
                          <h3 class="card-title">Perbandingan Jenis Kelamin</h3>

                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                  <i class="fas fa-times"></i>
                              </button>
                          </div>
                      </div>
                      <div class="card-body">
                          <canvas id="chartKecamatan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>

                      <!-- /.card-body -->
                  </div>


              </div>
          </div>
      </div>

      <div class="content col-md-6">
          <div class="container">
              <div class="container-fluid">
                  <!-- DONUT CHART -->
                  <div class="card card-danger">
                      <div class="card-header">
                          <h3 class="card-title">Perbandingan Kecamatan</h3>

                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                  <i class="fas fa-times"></i>
                              </button>
                          </div>
                      </div>
                      <div class="card-body">
                          <canvas id="chartJk" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>

                      <!-- /.card-body -->
                  </div>


              </div>
          </div>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data T/D Tangerang Selatan Tahun <span id="year"></span></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="data_pmk" class="table table-hover">
                    <thead class="text-center">
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Pangkalan</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Tingkatan</th>
                        <th>Kecamatan</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No. Hp</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($pmks as $p) :
                      ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $p->nama ?></td>
                        <td><?= $p->pangkalan ?></td>
                        <td><?= $p->tgl_lahir ?></td>
                        <td><?= $p->jenis_kelamin ?></td>
                        <td><?= $p->tingkatan ?></td>
                        <td><?= $p->kecamatan ?></td>
                        <td><?= $p->email ?></td>
                        <td><?= $p->alamat ?></td>
                        <td><?= $p->no_hp ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?= base_url('Edit-pmk/' . $p->id); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('Delete-pmk/' . $p->id); ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletePmk<?= $p->id ?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                        <!-- delete doctor Modal-->
                        <div class="modal fade" id="deletePmk<?= $p->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Anda yakin ingin menghapus data ini beserta data terkait? <p class="text-danger d-inline"></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                        <a href="<?= base_url('Delete-pmk/' . $p->id); ?>" class="btn btn-danger">Ya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- ChartJS -->
<script src="<?= base_url() ?>dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- jQuery -->
<script src="<?= base_url() ?>dashboard/plugins/jquery/jquery.min.js"></script>
<script>
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var genderCanvas = document.getElementById('chartJk').getContext('2d')
    var genderData = {
        labels: [
            'Laki-laki',
            'Perempuan'
        ],
        datasets: [{
            data: [<?= $pria ?>, <?= $wanita ?>],
            backgroundColor: ['#f56954', '#3c8dbc'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(genderCanvas, {
        type: 'pie',
        data: genderData,
        options: donutOptions
    })



    var kecamatanCanvas = document.getElementById('chartKecamatan').getContext('2d')
    var kecamatanData = {
        labels: [
            'Ciputat',
            'Ciputat Timur',
            'Serpong',
            'Serpong Utara',
            'Setu',
            'Pondok Aren',
            'Pamulang'
        ],
        datasets: [{
            data: [<?= $ciputat ?>, <?= $ciptim ?>, <?= $serpong ?>, <?= $serut ?>, <?= $setu ?>, <?= $pamulang ?>, <?= $ponren ?>],
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#ffc107', 'hsl(16deg 25% 38%)'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(kecamatanCanvas, {
        type: 'pie',
        data: kecamatanData,
        options: donutOptions
    })
</script>