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
                              <div class="card-header border-transparent bg-dark d-flex align-items-center">
                                  <h2 class="card-title text-bold text-lg">List Pramuka</h2>
                                  <div class="card-tools ml-auto">
                                      <a href="<?= base_url('Add_Pmk') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus pr-2"></i> Tambah Data</a>
                                  </div>
                              </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table id="doctor" class="table table-hover py-4">
                                      <thead>
                                          <tr>
                                              <th width="10px">No.</th>
                                              <th>Nama</th>
                                              <th>Pangkalan</th>
                                              <th>Tanggal Lahir</th>
                                              <th>Jenis Kelamin</th>
                                              <th>No. Hp</th>
                                              <th>Email</th>
                                              <th>Alamat</th>
                                              <th>Kecamatan</th>
                                              <th>Tingkatan</th>
                                              <th>Status</th>
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
                                                  <td><?= $p->no_hp ?></td>
                                                  <td><?= $p->email ?></td>
                                                  <td><?= $p->alamat ?></td>
                                                  <td><?= $p->kecamatan ?></td>
                                                  <td><?= $p->tingkatan ?></td>
                                                  <td>
                                                      <span class="badge badge-success">
                                                      </span>
                                                  </td>
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
                                              <?php endforeach; ?>
                                              </tr>
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