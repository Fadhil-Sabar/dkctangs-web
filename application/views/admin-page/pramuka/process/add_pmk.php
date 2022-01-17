<link rel="stylesheet" href="<?= base_url() ?>dashboard/plugins/upload-image/upload-image.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Admin_Pmk') ?>">Admin</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
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
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <?= form_open_multipart('') ?>
                                <div class="form-group mb-4">
                                    <label>Nama<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control <?php if (form_error('Nama')) echo 'is-invalid'; ?>" name="Nama" placeholder="Nama" value="<?= set_value('Nama'); ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('Nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Pangkalan<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control <?php if (form_error('Pangkalan')) echo 'is-invalid'; ?>" name="Pangkalan" placeholder="Pangkalan" value="<?= set_value('Pangkalan'); ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('Pangkalan'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Tanggal Lahir<i class="text-danger">*</i></label>
                                    <input type="date" class="form-control <?php if (form_error('TanggalLahir')) echo 'is-invalid'; ?>" name="Tanggal_Lahir" placeholder="Pendidikan terakhir" value="<?= set_value('TanggalLahir'); ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('TanggalLahir'); ?>
                                    </div>
                                </div>
                                <div class=" form-group mb-4">
                                    <label>Jenis Kelamin <i class="text-danger">*</i></label>
                                    <select name="Jenis_Kelamin" class="custom-select form-control <?php if (form_error('Jenis_Kelamin')) echo 'is-invalid'; ?>">
                                        <option selected disabled>Pilih jenis kelamin</option>
                                        <option value="Pria" <?= set_select('Jenis_Kelamin', 'Pria') ?>>Pria</option>
                                        <option value="Wanita" <?= set_select('Jenis_Kelamin', 'Wanita') ?>>Wanita</option>
                                    </select>
                                    <div class="text-danger mt-2">
                                        <?= form_error('Jenis_Kelamin'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>No. Telepon <i class="text-danger">*</i></label>
                                    <input type="number" class="form-control <?php if (form_error('No_Hp')) echo 'is-invalid'; ?>" name="No_Hp" placeholder="No. Telepon" value="<?= set_value('No_Hp'); ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('No_Hp'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Email <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control <?php if (form_error('Email')) echo 'is-invalid'; ?>" name="Email" placeholder="Email" value="<?= set_value('Email'); ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('Email'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group mb-4">
                                    <label>Alamat <i class="text-danger">*</i></label>
                                    <textarea class="form-control <?php if (form_error('Alamat')) echo 'is-invalid'; ?>" name="Alamat" rows="5" placeholder="Alamat"><?= set_value('Alamat'); ?></textarea>
                                    <div class="text-danger mt-2">
                                        <?= form_error('Alamat'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Kecamatan <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control <?php if (form_error('Kecamatan')) echo 'is-invalid'; ?>" name="Kecamatan" placeholder="Kecamatan" value="<?= set_value('Kecamatan'); ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('Kecamatan'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Tingkatan <i class="text-danger">*</i></label>
                                    <select name="Tingkatan" class="custom-select form-control <?php if (form_error('Tingkatan')) echo 'is-invalid'; ?>">
                                        <option selected disabled>Pilih status</option>
                                        <option value="Penggalang" <?= set_select('Tingkatan', 'Penggalang') ?>>Penggalang</option>
                                        <option value="Penegak" <?= set_select('Tingkatan', 'Penegak') ?>>Penegak</option>
                                        <option value="Bantara" <?= set_select('Tingkatan', 'Bantara') ?>>Bantara</option>
                                        <option value="Laksana" <?= set_select('Tingkatan', 'Laksana') ?>>Laksana</option>
                                    </select>
                                    <div class="text-danger mt-2">
                                        <?= form_error('Tingkatan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <input class="btn btn-md btn-info float-right" type="submit" name="TambahPmk" value="Tambah">
                            </div>
                            </form>
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