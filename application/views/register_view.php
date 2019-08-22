<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/bootstrap/css/bootstrap.min.css' ?>">
    <style type="text/css">
        body {
            color: #fff;
            background: #808080;
        }

        .form-control {
            min-height: 41px;
            background: #fff;
            box-shadow: none !important;
            border-color: #e3e3e3;
        }

        .form-control:focus {
            border-color: #70c5c0;
        }

        .form-control,
        .btn {
            border-radius: 2px;
        }

        .login-form {
            width: 500px;
            margin: 0 auto;
            padding: 100px 0 30px;
        }

        .login-form form {
            color: #7a7a7a;
            border-radius: 2px;
            margin-bottom: 15px;
            font-size: 13px;
            background: #ececec;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
            position: relative;
        }

        .login-form h2 {
            font-size: 22px;
            margin: 35px 0 25px;
        }

        .login-form .avatar {
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -50px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            background: #70c5c0;
            padding: 15px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .login-form .avatar img {
            width: 100%;
        }

        .login-form input[type="checkbox"] {
            margin-top: 2px;
        }

        .login-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: #70c5c0;
            border: none;
            margin-bottom: 20px;
        }

        .login-form .btn:hover,
        .login-form .btn:focus {
            background: #50b8b3;
            outline: none !important;
        }

        .login-form a {
            color: #fff;
            text-decoration: underline;
        }

        .login-form a:hover {
            text-decoration: none;
        }

        .login-form form a {
            color: #7a7a7a;
            text-decoration: none;
        }

        .login-form form a:hover {
            text-decoration: underline;
        }

        img {
            width: 200px;
            height: 50px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="login-form">
        <form action="<?php echo base_url('auth/registration'); ?>" method="post">
            <center><img src="<?= base_url('assets/'); ?>img/logo.png"></center>
            <?php echo $this->session->flashdata('message'); ?>

            <div class="form-group">
                <label for="nama">Full name</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama lengkap..." name="nama" value="<?= set_value('nama'); ?>">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Email..." name="email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" class="form-control" id="password1" placeholder="Password..." name="password1">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="password2">Repeat password</label>
                <input type="password" class="form-control" id="password2" placeholder="Repeat password..." name="password2">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Registration</button>
            </div>
        </form>
    </div>

</body>

</html>