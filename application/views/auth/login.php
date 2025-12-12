<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login - SmartPOS</title>

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css') ?>">

  <style>
    body {
      background: #f4f6f9;
    }
    .login-box {
      margin-top: 10%;
    }
  </style>
</head>

<body>

<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h3><b>Smart</b>POS</h3>
    </div>

    <div class="card-body">

      <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
          <?= $this->session->flashdata('error') ?>
        </div>
      <?php endif; ?>

      <form action="<?= base_url('auth/login_action') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <button class="btn btn-primary btn-block" type="submit">
          <i class="fas fa-sign-in-alt"></i> Login
        </button>
      </form>

    </div>
  </div>
</div>

<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js') ?>"></script>

</body>
</html>
