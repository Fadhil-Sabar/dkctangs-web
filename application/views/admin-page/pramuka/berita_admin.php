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
                            <h2 class="card-title text-lg">List Berita</h2>
                            <div class="card-tools ml-auto">
                                <a href="<?= base_url('Add-News-Page') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus pr-2"></i>Tambah Berita</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="news" class="table table-hover py-4">
                                    <thead>
                                        <tr>
                                            <th width="15px">No.</th>
                                            <th width="200px">Judul Berita</th>
                                            <th>Kategori</th>
                                            <th>Penulis</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($news as $n) :
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $n->judul_berita ?></td>
                                                <td><?= $n->kategori_berita ?></td>
                                                <td><?= $n->penulis_berita ?></td>
                                                <td><?= $n->created_at ?></td>
                                                <td>
                                                    <span class="badge  <?php ($n->status_berita === 'Published') ? print 'badge-success' : print 'badge-danger' ?>">
                                                        <?= $n->status_berita ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="btn-group btn-group-toggle">
                                                        <?php if ($n->status_berita == 'Published') : ?>
                                                            <a class="btn btn-sm btn-danger" href="<?= base_url('Draft-News/' . $n->kode_berita) ?>" data-toggle="modal" data-target="#draftNews<?= $n->kode_berita ?>">
                                                                <i class="fa fa-trash-restore"></i>
                                                            </a>
                                                        <?php else : ?>
                                                            <a class="btn btn-sm btn-success" href="<?= base_url('Publish-News/' . $n->kode_berita) ?>" data-toggle="modal" data-target="#publishNews<?= $n->kode_berita ?>">
                                                                <i class="fa fa-upload"></i>
                                                            </a>
                                                        <?php endif; ?>
                                                        <a href="<?= base_url('Detail-News/' . $n->kode_berita) ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="<?= base_url('Edit-News/' . $n->kode_berita) ?>" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-danger" href="<?= base_url('Delete-News/' . $n->kode_berita) ?>" data-toggle="modal" data-target="#deleteNews<?= $n->kode_berita ?>">
                                                            <i class="fa fa-trash"></i>
                                                        </a>

                                                        <!-- publishNews Modal-->
                                                        <div class="modal fade" id="publishNews<?= $n->kode_berita ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">Anda yakin ingin mempublish berita ini?</div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                                                        <a class="btn btn-success" href="<?= base_url('Publish-News/' . $n->kode_berita) ?>">Publish</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- draftNews Modal-->
                                                        <div class="modal fade" id="draftNews<?= $n->kode_berita ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">Anda yakin ingin mengubah berita ini menjadi draft?</div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                                                        <a class="btn btn-danger" href="<?= base_url('Draft-News/' . $n->kode_berita) ?>">Draft</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- deleteNews Modal-->
                                                        <div class="modal fade" id="deleteNews<?= $n->kode_berita ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">Anda yakin ingin menghapus berita ini?</div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                                                        <a class="btn btn-danger" href="<?= base_url('Delete-News/' . $n->kode_berita) ?>">Ya</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </td>
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