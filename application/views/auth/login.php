<!DOCTYPE html>
<html>
<head>
    <title>Login | SmartPOS</title>
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css'); ?>">
</head>
<body class="login-page bg-light">

<div class="login-box">
    <div class="card">

        <div class="card-header bg-primary text-white text-center">
            <h4>SmartPOS Login</h4>
        </div>

        <div class="card-body">

            <?php if($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
            <?php } ?>

            <form method="post" action="<?= base_url('auth/login_action'); ?>">

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button class="btn btn-primary btn-block">Login</button>

            </form>

        </div>
    </div>
</div>

</body>
</html>
