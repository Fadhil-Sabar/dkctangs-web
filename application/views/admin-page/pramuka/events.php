<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <?php
          if ($this->session->flashdata('msg')) :
          ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?= $this->session->flashdata('msg') ?>
              <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php
            $this->session->unset_userdata('msg');
          endif;
          ?>
          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <div class="card-header border-transparent bg-dark d-flex align-items-center">
              <h2 class="card-title text-lg">List Kegiatan</h2>
              <div class="card-tools ml-auto">
                <a href="<?= base_url('Add-Event-Page') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus pr-2"></i> Tambah Kegiatan</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table id="news" class="table table-hover py-4">
                  <thead>
                    <tr>
                      <th width="15px">No.</th>
                      <th>Judul</th>
                      <th>Tempat</th>
                      <th>Tanggal</th>
                      <th>Waktu</th>
                      <th>Tanggal Dibuat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($events as $e) :
                    ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $e->nama_kegiatan ?></td>
                        <td><?= $e->tempat_kegiatan ?></td>
                        <td><?= $e->tgl_kegiatan ?></td>
                        <td><?= $e->waktu_mulai . ' - ' . $e->waktu_akhir ?></td>
                        <td><?= $e->created_at ?></td>
                        <td>
                          <div class="btn-group">
                            <a href="<?= base_url('Detail-Event/' . $e->kode_kegiatan) ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="Detail">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="<?= base_url('Edit-Event/' . $e->kode_kegiatan) ?>" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit">
                              <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="<?= base_url('Delete-Event/' . $e->kode_kegiatan) ?>" data-toggle="modal" data-target="#deleteEvent<?= $e->kode_kegiatan ?>">
                              <i class="fa fa-trash"></i>
                            </a>

                          </div>
                        </td>

                        <!-- deleteEvent Modal-->
                        <div class="modal fade" id="deleteEvent<?= $e->kode_kegiatan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">Anda yakin ingin menghapus data ini?</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                <a class="btn btn-danger" href="<?= base_url('Delete-Event/' . $e->kode_kegiatan) ?>">Ya</a>
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
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->