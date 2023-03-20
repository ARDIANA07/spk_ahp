
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register - SPK</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-image: url('<?php echo base_url('style/img/bg.jpg') ?>');" width="100%">

    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-5 col-lg-6 col-md-5">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                            <h3 class="h4 text-gray-900 mb-0"><b>Sistem Informasi Seleksi Wisata Halal dengan Metode Analytical Hierarchy Process (AHP) di Bantul Yogyakarta</b></h3><br>
                            <img src="<?php echo base_url('style/img/logo_bantul.png') ?>" width="250px" rel="stylesheet" alt="logo">
                            <br>
                            <h1 class="h4 text-gray-900 mb-4">Registrasi Sebagai Wisatawan</h1>
                           
                            <br>
                            </div>
                            <form method="post" action="<?php echo base_url('auth/registration') ?> " class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name"
                                        placeholder="Nama Lengkap" name="name" value="<?= set_value('name');?>">
                                       <small class="text-danger"><?= form_error('name'); ?></small>
                                    </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email"
                                        placeholder="Email" name="email" value="<?= set_value('email');?>" >
                                        <small class="text-danger"><?= form_error('email'); ?></small>
                                    </div>
    
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password"
                                        placeholder="Password" name="password">
                                        <small class="text-danger"><?= form_error('password'); ?></small>
                                </div>
                               
                               <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth'); ?>">Already have an account? Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>