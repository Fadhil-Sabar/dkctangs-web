<link rel="stylesheet" href="<?= base_url() ?>dashboard/plugins/upload-image/upload-image.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Admin_Pmk') ?>">Admin</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                                    <input type="text" class="form-control <?php if (form_error('Nama')) echo 'is-invalid'; ?>" name="Nama" placeholder="Nama" value="<?= set_value('Nama', $pmk->nama) ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('Nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Pangkalan<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control <?php if (form_error('Pangkalan')) echo 'is-invalid'; ?>" name="Pangkalan" placeholder="Pangkalan" value="<?= set_value('Pangkalan', $pmk->pangkalan); ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('Pangkalan'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Tanggal Lahir<i class="text-danger">*</i></label>
                                    <input type="date" class="form-control <?php if (form_error('TanggalLahir')) echo 'is-invalid'; ?>" name="Tanggal_Lahir" placeholder="Pendidikan terakhir" value="<?= set_value('TanggalLahir', $pmk->tgl_lahir); ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('TanggalLahir'); ?>
                                    </div>
                                </div>
                                <div class=" form-group mb-4">
                                    <label>Jenis Kelamin <i class="text-danger">*</i></label>
                                    <select name="Jenis_Kelamin" class="custom-select form-control <?php if (form_error('Jenis_Kelamin')) echo 'is-invalid'; ?>">
                                        <option selected disabled>Pilih jenis kelamin</option>
                                        <option value="Pria" <?php ($pmk->jenis_kelamin === 'Pria') ? print 'selected' : set_select('Jenis_Kelamin', 'Pria') ?>>Pria</option>
                                        <option value="Wanita" <?php ($pmk->jenis_kelamin === 'Wanita') ? print 'selected' : set_select('Jenis_Kelamin', 'Wanita') ?>>Wanita</option>
                                    </select>
                                    <div class="text-danger mt-2">
                                        <?= form_error('Jenis_Kelamin'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>No. Telepon <i class="text-danger">*</i></label>
                                    <input type="number" class="form-control <?php if (form_error('No_Hp')) echo 'is-invalid'; ?>" name="No_Hp" placeholder="No. Telepon" value="<?= set_value('No_Hp', $pmk->no_hp); ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('No_Hp'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Email <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control <?php if (form_error('Email')) echo 'is-invalid'; ?>" name="Email" placeholder="Email" value="<?= set_value('Email', $pmk->email); ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('Email'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group mb-4">
                                    <label>Alamat <i class="text-danger">*</i></label>
                                    <textarea class="form-control <?php if (form_error('Alamat')) echo 'is-invalid'; ?>" name="Alamat" rows="5" placeholder="Alamat"><?= set_value('Alamat', $pmk->alamat); ?></textarea>
                                    <div class="text-danger mt-2">
                                        <?= form_error('Alamat'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Kecamatan <i class="text-danger">*</i></label>
                                    <select name="Kecamatan" class="custom-select form-control <?php if (form_error('Kecamatan')) echo 'is-invalid'; ?>">
                                        <option selected disabled>Pilih Kecamatan</option>
                                        <option value="Ciputat" <?php ($pmk->kecamatan === 'Ciputat') ? print 'selected' : print set_select('Kecamatan', 'Ciputat') ?>>Ciputat</option>
                                        <option value="Ciputat Timur" <?php ($pmk->kecamatan === 'Ciputat Timur') ? print 'selected' : print set_select('Kecamatan', 'Ciputat Timur') ?>>Ciputat Timur</option>
                                        <option value="Serpong" <?php ($pmk->kecamatan === 'Serpong') ? print 'selected' : print set_select('Kecamatan', 'Serpong') ?>>Serpong</option>
                                        <option value="Serpong Utara" <?php ($pmk->kecamatan === 'Serpong Utara') ? print 'selected' : print set_select('Kecamatan', 'Serpong Utara') ?>>Serpong Utara</option>
                                        <option value="Pondok Aren" <?php ($pmk->kecamatan === 'Pondok Aren') ? print 'selected' : print set_select('Kecamatan', 'Pondok Aren') ?>>Pondok Aren</option>
                                        <option value="Pamulang" <?php ($pmk->kecamatan === 'Pamulang') ? print 'selected' : print set_select('Kecamatan', 'Pamulang') ?>>Pamulang</option>
                                        <option value="Setu" <?php ($pmk->kecamatan === 'Setu') ? print 'selected' : print set_select('Kecamatan', 'Setu') ?>>Setu</option>
                                    </select>
                                    <div class="text-danger mt-2">
                                        <?= form_error('Kecamatan'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Tingkatan <i class="text-danger">*</i></label>
                                    <select name="Tingkatan" class="custom-select form-control <?php if (form_error('Tingkatan')) echo 'is-invalid'; ?>">
                                        <option selected disabled>Pilih status</option>
                                        <option value="Penggalang" <?php ($pmk->tingkatan === 'Penggalang') ? print 'selected' : print set_select('Tingkatan', 'Penggalang') ?>>Penggalang</option>
                                        <option value="Penegak" <?php ($pmk->tingkatan === 'Penegak') ? print 'selected' : print set_select('Tingkatan', 'Penegak') ?>>Penegak</option>
                                        <option value="Bantara" <?php ($pmk->tingkatan === 'Bantara') ? print 'selected' : print set_select('Tingkatan', 'Bantara') ?>>Bantara</option>
                                        <option value="Laksana" <?php ($pmk->tingkatan === 'Laksana') ? print 'selected' : print set_select('Tingkatan', 'Laksana') ?>>Laksana</option>
                                    </select>
                                    <div class="text-danger mt-2">
                                        <?= form_error('Tingkatan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <input class="btn btn-md btn-info float-right" type="submit" name="UpdatePmk" value="Update">
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