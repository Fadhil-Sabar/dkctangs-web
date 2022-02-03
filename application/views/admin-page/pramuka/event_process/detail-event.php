<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Kegiatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Event-Page') ?>">Kegiatan</a></li>
                        <li class="breadcrumb-item active">Detail Kegiatan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body row m-3">
                            <div class="col-md-12">
                                <!-- DETAIL EVENT -->
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 posts-list">
                                            <div class="single-post">
                                                <div class="blog_details">
                                                    <div class="feature-img">
                                                        <img src="<?= base_url() ?>dashboard/images/events/<?= $eventById->gambar_kegiatan ?>"
                                                            class="img-fluid rounded d-flex m-auto"
                                                            alt="gambar kegiatan">
                                                    </div>
                                                    <h1 class="mt-5"><?= $eventById->nama_kegiatan ?></h1>
                                                    <ul class="blog-info-link mt-3 mb-5">
                                                        <li class="d-flex align-items-center">
                                                            <i class="fa fa-clock"></i><?= $eventById->created_at ?>
                                                        </li>
                                                    </ul>
                                                    <?= $eventById->konten_kegiatan ?>
                                                    <div class="navigation-top">
                                                        <div class="d-sm-flex justify-content-between ">
                                                            <div class="col-sm-6 my-2 my-sm-0">
                                                                <ul>
                                                                    <div class="d-flex">
                                                                        <li>Link Pendaftaran</li>
                                                                        <li>:
                                                                            <a href="<?= $eventById->link_kegiatan ?>">
                                                                                <?= $eventById->link_kegiatan ?>
                                                                            </a>
                                                                        </li>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <li>Contact Person</li>
                                                                        <li>: 093948923324</li>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <li>Email CP</li>
                                                                        <li>: emailadmin@gmail.com</li>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <li>Lokasi</li>
                                                                        <li>: <?= $eventById->tempat_kegiatan ?> </li>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <li>Durasi </li>
                                                                        <li>:
                                                                            <?= $eventById->waktu_mulai . ' - ' . $eventById->waktu_akhir ?>
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END DETAIL EVENT -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>