<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title;?></title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="<?= base_url();?>public/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url();?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url();?>public/dist/css/adminlte.min2167.css?v=3.2.0">
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>Login</b></a>
            </div>
            <div class="card-body">
                <?= validation_errors('<div class="alert alert-success" role="alert">','</div>');
                                    if ($this->session->flashdata('message_login_success'))
                                    {
                                        echo '<div class="alert alert-success" role="alert">';
                                        echo $this->session->flashdata('message_login_success');
                                        echo '</div>';
                                    }else if($this->session->flashdata('message_login_error')){
                                        echo '<div class="alert alert-danger" role="alert">';
                                        echo $this->session->flashdata('message_login_error');
                                        echo '</div>';  
                                    }
                                ?>
                <form action="<?= base_url('login');?>" method="post">
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
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-sm btn-block">Login</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>


    <script src="<?= base_url();?>public/plugins/jquery/jquery.min.js"></script>

    <script src="<?= base_url();?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url();?>public/dist/js/adminlte.min2167.js?v=3.2.0"></script>
</body>

</html>
