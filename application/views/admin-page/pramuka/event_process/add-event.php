<link rel="stylesheet" href="<?= base_url() ?>dashboard/plugins/upload-image/upload-image.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Kegiatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Event-Page') ?>">Kegiatan</a></li>
                        <li class="breadcrumb-item active">Tambah Kegiatan</li>
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
                        <?= form_open_multipart('') ?>
                        <div class="card-body row">
                            <div class="col-md-7">
                                <div class="form-group mb-4">
                                    <label>Nama Kegiatan <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control <?php if (form_error('NamaKegiatan')) echo 'is-invalid'; ?>" name="NamaKegiatan" placeholder="Nama kegiatan" value="<?= set_value('NamaKegiatan') ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('NamaKegiatan'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Konten Kegiatan <i class="text-danger">*</i></label>
                                    <textarea id="editor" name="Kontenkegiatan" class="form-control" rows="15" placeholder="Keterangan atau spesifikasi…"><?= set_value('Kontenkegiatan') ?></textarea>
                                    <div class="text-danger mt-2">
                                        <?= form_error('Kontenkegiatan'); ?>
                                    </div>
                                </div>
                                <label>Gambar Kegiatan <i class="text-danger">*</i></label>
                                <div class="contain text-center pt-2">
                                    <div>
                                        <label>Upload Gambar Kegiatan</label>
                                        <div id="file-upload-form" class="uploader">
                                            <input id="file-upload" type="file" name="GambarKegiatan" accept="image/*" />

                                            <label for="file-upload" id="file-drag">
                                                <img id="file-image" src="#" alt="Preview" class="hidden">
                                                <div id="start">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                    <div>Pilih file atau tarik disini</div>
                                                    <div id="notimage" class="hidden">Pilih gambar</div>
                                                    <span id="file-upload-btn" class="btn btn-primary">Pilih file</span>
                                                </div>
                                                <div id="response" class="hidden">
                                                    <div id="messages"></div>
                                                </div><br>
                                                <small>Hanya JPG, JPEG, PNG dan GIF yang diizinkan.</small><br>
                                                <small>Ukuran maksimum 2 MB.</small>
                                                <?php if (form_error('GambarKegiatan')) : ?>
                                                    <div class="text-danger mt-2">
                                                        <?= form_error('GambarKegiatan'); ?>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if (isset($error)) : ?>
                                                    <div class="text-danger mt-2">
                                                        <?= $error ?>
                                                    </div>
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group mb-4">
                                    <label>Tempat Kegiatan <i class="text-danger">*</i></label>
                                    <input type="text" class="form-control <?php if (form_error('TempatKegiatan')) echo 'is-invalid'; ?>" name="TempatKegiatan" placeholder="Tempat kegiatan" value="<?= set_value('TempatKegiatan') ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('TempatKegiatan'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Tanggal Kegiatan <i class="text-danger">*</i></label>
                                    <input type="date" class="form-control  <?php if (form_error('TanggalKegiatan')) echo 'is-invalid'; ?>" name="TanggalKegiatan" value="<?= set_value('TanggalKegiatan') ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('TanggalKegiatan'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Waktu Mulai Kegiatan <i class="text-danger">*</i></label>
                                    <input type="time" class="form-control <?php if (form_error('WaktuMulaiKegiatan')) echo 'is-invalid'; ?>" name="WaktuMulaiKegiatan" value="<?= set_value('WaktuMulaiKegiatan') ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('WaktuMulaiKegiatan'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Waktu Akhir Kegiatan <i class="text-danger">*</i></label>
                                    <input type="time" class="form-control <?php if (form_error('WaktuAkhirKegiatan')) echo 'is-invalid'; ?>" name="WaktuAkhirKegiatan" value="<?= set_value('WaktuAkhirKegiatan') ?>">
                                    <div class="text-danger mt-2">
                                        <?= form_error('WaktuAkhirKegiatan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input class="btn btn-md btn-info float-right mt-5" type="submit" name="TambahKegiatan" value="Tambah Kegiatan">
                            </div>
                        </div>
                        </form>
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

<script>
    // File Upload
    // 
    function ekUpload() {
        function Init() {

            console.log("Upload Initialised");

            var fileSelect = document.getElementById('file-upload'),
                fileDrag = document.getElementById('file-drag'),
                submitButton = document.getElementById('submit-button');

            fileSelect.addEventListener('change', fileSelectHandler, false);

            // Is XHR2 available?
            var xhr = new XMLHttpRequest();
            if (xhr.upload) {
                // File Drop
                fileDrag.addEventListener('dragover', fileDragHover, false);
                fileDrag.addEventListener('dragleave', fileDragHover, false);
                fileDrag.addEventListener('drop', fileSelectHandler, false);
            }
        }

        function fileDragHover(e) {
            var fileDrag = document.getElementById('file-drag');

            e.stopPropagation();
            e.preventDefault();

            fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
        }

        function fileSelectHandler(e) {
            // Fetch FileList object
            var files = e.target.files || e.dataTransfer.files;

            // Cancel event and hover styling
            fileDragHover(e);

            // Process all File objects
            for (var i = 0, f; f = files[i]; i++) {
                parseFile(f);
            }
        }

        // Output
        function output(msg) {
            // Response
            var m = document.getElementById('messages');
            m.innerHTML = msg;
        }

        function parseFile(file) {

            console.log(file.name);
            output(
                '<strong>' + encodeURI(file.name) + '</strong>'
            );

            // var fileType = file.type;
            // console.log(fileType);
            var imageName = file.name;

            var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
            if (isGood) {
                document.getElementById('start').classList.add("hidden");
                document.getElementById('response').classList.remove("hidden");
                document.getElementById('notimage').classList.add("hidden");
                // Thumbnail Preview
                document.getElementById('file-image').classList.remove("hidden");
                document.getElementById('file-image').src = URL.createObjectURL(file);
            } else {
                document.getElementById('file-image').classList.add("hidden");
                document.getElementById('notimage').classList.remove("hidden");
                document.getElementById('start').classList.remove("hidden");
                document.getElementById('response').classList.add("hidden");
                document.getElementById("file-upload-form").reset();
            }
        }

        // Check for the various File API support.
        if (window.File && window.FileList && window.FileReader) {
            Init();
        } else {
            document.getElementById('file-drag').style.display = 'none';
        }
    }
    ekUpload();
</script>