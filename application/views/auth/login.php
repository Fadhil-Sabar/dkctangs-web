<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css">
</head>

<body>
    <div class="login-dark">
        <?= form_open(''); ?>
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration p-0"><i class="icon ion-ios-locked-outline m-0"></i></div>
        <p class="text-center mb-0"><b>Login</b></p>
        <p class="text-center mb-4">Admin DKC Tangsel</p>
        <?php if ($this->session->flashdata('auth_msg')) {
            echo $this->session->flashdata('auth_msg');
        }
        $this->session->unset_userdata('auth_msg');
        ?>
        <div class="form-group">
            <input class="form-control <?= form_error('username') ? 'invalid' : '' ?>" type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>" required>
            <div class="invalid-feedback">
                <?= form_error('username') ?>
            </div>
        </div>
        <div class="form-group">
            <input class="form-control <?= form_error('password') ? 'invalid' : '' ?>" type="password" name="password" placeholder="Password" value="<?= set_value('password') ?>" required>
            <div class="invalid-feedback">
                <?= form_error('password') ?>
            </div>
        </div>
        <div class="form-group">
            <input class="btn btn-outline-primary btn-block" type="submit" name="masuk" value="Login">
        </div>
        <a href="<?= base_url('Forgot-Pass') ?>" class="forgot text-white">Lupa Password?</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>