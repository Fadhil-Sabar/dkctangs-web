<link rel="stylesheet" href="<?= base_url() ?>dashboard/plugins/upload-image/upload-image.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Berita</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('News-Page') ?>">Berita</a></li>
            <li class="breadcrumb-item active">Edit Berita</li>
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
          <!-- <?php
                echo $newsById->kategori_berita;
                ?> -->
          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <!-- /.card-header -->
            <?= form_open_multipart('') ?>
            <div class="card-body row">
              <div class="col-md-8">
                <div class="form-group mb-4">
                  <label>Judul Berita <i class="text-danger">*</i></label>
                  <input type="text" name="JudulBerita" class="form-control <?php if (form_error('JudulBerita')) echo 'is-invalid'; ?>" placeholder="Judul berita" value="<?= set_value('JudulBerita', $newsById->judul_berita) ?>">
                  <div class="text-danger mt-2">
                    <?= form_error('JudulBerita'); ?>
                  </div>
                </div>
                <div class="form-group mb-4">
                  <label>Penulis Berita</label>
                  <input type="text" name="PenulisBerita" class="form-control <?php if (form_error('PenulisBerita')) echo 'is-invalid'; ?>" placeholder="Penulis berita" value="<?= set_value('PenulisBerita', $newsById->penulis_berita); ?>">
                  <div class="text-danger mt-2">
                    <?= form_error('PenulisBerita'); ?>
                  </div>
                </div>
                <div class="form-group mb-4">
                  <label>Konten Berita <i class="text-danger">*</i></label>
                  <textarea id="editor" name="KontenBerita" class="form-control" rows="15" placeholder="Konten Berita"><?= set_value('KontenBerita', $newsById->konten_berita) ?></textarea>
                  <div class="text-danger mt-2">
                    <?= form_error('KontenBerita'); ?>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <label>Gambar Berita <i class="text-danger">*</i></label>
                <div class="contain text-center pt-2">
                  <div>
                    <label>Upload Gambar Berita</label>
                    <div id="file-upload-form" class="uploader">
                      <input id="file-upload" type="file" name="ImgBerita" accept="image/*" />
                      <label for="file-upload" id="file-drag">
                        <img id="file-image" src="<?= base_url() ?>dashboard/images/news/<?= $newsById->gambar_berita ?>" alt="Preview" class="">
                        <div id="start" class="hidden">
                          <i class="fa fa-download" aria-hidden="true"></i>
                          <div>Select a file or drag here</div>
                          <div id="notimage" class="hidden">Please select an image</div>
                          <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                        </div>
                        <div id="response" class="">
                          <div id="messages"><?= $newsById->gambar_berita ?></div>
                        </div><br>
                        <small>Hanya JPG, JPEG, PNG dan GIF yang diizinkan.</small><br>
                        <small>Ukuran maksimum 2 MB.</small>
                      </label>
                    </div>
                    <input type="hidden" name="old_article_image" value="<?= $newsById->gambar_berita ?>" />
                  </div>
                </div>
                <?php if (form_error('ImgBerita')) : ?>
                  <div class="text-danger mt-2">
                    <?= form_error('ImgBerita'); ?>
                  </div>
                <?php endif; ?>

                <?php if (isset($error)) : ?>
                  <div class="text-danger mt-2">
                    <?= $error ?>
                  </div>
                <?php endif; ?>
                <div class="form-group mb-4">
                  <label>Kategori <i class="text-danger">*</i></label>
                  <select name="KategoriBerita" class="custom-select form-control <?php if (form_error('KategoriBerita')) echo 'is-invalid'; ?>">
                    <option selected disabled>Pilih kategori</option>
                    <?php foreach ($categories as $category) : ?>
                      <option value="<?= $category->nama_kategori ?>" <?= ($newsById->kategori_berita == $category->nama_kategori) ? 'selected' : set_select('KategoriBerita', $category->nama_kategori) ?>><?= $category->nama_kategori ?></option>
                    <?php endforeach; ?>
                  </select>
                  <div class="text-danger">
                    <?= form_error('KategoriBerita'); ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <input class="btn btn-md btn-info float-right mt-5" type="submit" name="EditBerita" value="Edit Berita">
              </div>
            </div>
            </form>
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