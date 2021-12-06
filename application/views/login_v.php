<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Material Login Form</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Situs Pengaduan Masyarakat</h1>
</div>


<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>

    <?= $this->session->flashdata('msg'); ?>

                <?= form_open('Auth/LoginController', 'class="user"'); ?>

    <form>
      <div class="input-container">
      <input type="text" class="form-control form-control-user" id="username" name="username" autofocus value="<?= set_value('username') ?>">
        <label for="username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
      <input type="password" class="form-control form-control-user" id="password" name="password" >
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>Login</span></button>
      </div>
      
    </form>
  </div>


  
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Daftar
      <div class="close"></div>
    </h1>
    <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>') ?>

              <?= $this->session->flashdata('msg'); ?>

              <?= form_open('Auth/RegisterController', 'class="user"') ?>

   
      <div class="input-container">
        <input type="text" id="nik" name="nik" value="<?= set_value('nik') ?>"/>
        <label for="#{label}">NIK</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="nama" name="nama" value="<?= set_value('nama') ?>"/>
        <label for="#{label}">Nama</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="username" name="username" value="<?= set_value('username') ?>"/>
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
          <input type="text" id="password" name="password" value="<?= set_value('password') ?>"/>
          <label for="#{label}">Password</label>
          <div class="bar"></div>
      </div>

      <div class="input-container">
        <input type="text" id="telp" name="telp" value="<?= set_value('telp') ?>"/>
        <label for="#{label}">Nomor Telpon</label>
        <div class="bar"></div>
    </div>

      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
</div>

<!-- partial -->
  

</body>
</html>
