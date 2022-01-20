<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('News-Page') ?>">Berita</a></li>
                        <li class="breadcrumb-item active">Detail Berita</li>
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
                <!-- Left col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body row m-3">
                            <div class="col-md-12">
                                <!-- DETAIL BLOG -->
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 posts-list">
                                            <div class="single-post">
                                                <div class="blog_details">
                                                    <div class="feature-img">
                                                        <img src="<?= base_url() ?>dashboard/images/news/<?= $newsById->gambar_berita ?>" class="img-fluid rounded d-flex m-auto" alt="<?= $newsById->judul_berita ?>">
                                                    </div>
                                                    <h1 class="mt-5"><?= $newsById->judul_berita ?></h1>
                                                    <ul class="blog-info-link mt-3 mb-5">
                                                        <li class=" d-flex align-items-center">
                                                            <a href="">
                                                                <i class="fa fa-user"></i><?= $newsById->penulis_berita ?>
                                                            </a>
                                                        </li>
                                                        <li><?= $newsById->kategori_berita ?></li>
                                                        <li><?= $newsById->created_at ?></li>
                                                    </ul>
                                                    <?= $newsById->konten_berita ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END DETAIL BLOG -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>