<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SmartPOS - Login</title>

    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <b>SmartPOS</b> CI3
  </div>

  <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
  <?php endif; ?>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login untuk melanjutkan</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-user"></span></div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>
