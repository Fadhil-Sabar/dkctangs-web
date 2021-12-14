  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kegiatan Gelar Senja 2021</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Gelar Senja 2021</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kegiatan Peserta Gelar Senja 2021</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-hover">
                    <thead class="text-center">
                    <tr>
                      <th>Id Peserta</th>
                      <th>Jenis Peserta</th>
                      <th>Nama Lengkap</th>
                      <th>Nomor Telepon</th>
                      <th>Jenis Kelamin</th>
                      <th>Pangkalan</th>
                      <th>Ranting</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Email</th>
                      <th>Penyakit</th>
                      <th>Sertifikat Vaksin</th>
                      <th>Surat Kesehatan</th>
                      <th>Surat Mandat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach ($GS as $g) :
                    ?>
                    <tr>
                      <td><?= $g['id_peserta_gelas']; ?></td>
                      <td><?= $g['jenis_peserta'] ?></td>
                      <td><?= $g['nama_lengkap'] ?></td>
                      <td><?= $g['no_hp'] ?></td>
                      <td><?= $g['jenis_kelamin'] ?></td>
                      <td><?= $g['pangkalan'] ?></td>
                      <td><?= $g['ranting'] ?></td>
                      <td><?= $g['tempat_lahir'] ?></td>
                      <td><?= $g['tanggal_lahir'] ?></td>
                      <td><?= $g['email'] ?></td>
                      <td><?= $g['penyakit'] ?></td>
                      <td><a class="image-popup" href="<?= base_url() ?>peserta/images/gelas2021/sertifikat_vaksin/<?= $g['sertifikat_vaksin'] ?>"><img width="120" class="img-responsive" src="<?= base_url() ?>peserta/images/gelas2021/sertifikat_vaksin/<?= $g['sertifikat_vaksin'] ?>" /></a></td>
                      <td><a class="image-popup" href="<?= base_url() ?>peserta/images/gelas2021/surat_kesehatan/<?= $g['surat_kesehatan'] ?>"><img width="120" class="img-responsive" src="<?= base_url() ?>peserta/images/gelas2021/surat_kesehatan/<?= $g['surat_kesehatan'] ?>" /></a></td>
                      <td><a class="image-popup" href="<?= base_url() ?>peserta/images/gelas2021/surat_mandat/<?= $g['surat_mandat'] ?>"><img width="120" class="img-responsive" src="<?= base_url() ?>peserta/images/gelas2021/surat_mandat/<?= $g['surat_mandat'] ?>" /></a></td>
                    </tr>
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