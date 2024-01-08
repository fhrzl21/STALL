<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/x-icon" href="<?php echo base_url('asset/'); ?>img/logo.ico">
    <title><?php echo $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('asset/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    <link href="<?php echo base_url('asset/'); ?>css/font.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('asset/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('asset/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-12 col-md-9 mt-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="rounded mx-auto d-block col-lg-5 mt-5"><img src="<?php echo base_url('asset/') ?>img/logo.png" width="250" height="250" style="display: block; margin: 15px 50px 50px;" alt=""></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">STALL Login</h1>
                                    </div>
                                    <form class="user" method="post" action="<?php echo base_url('Login/get_user'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" id="" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                        <!-- <a href="index.html" type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('asset/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('asset/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Date picker JS -->
    <!-- <script src="<//?php echo base_url('asset/'); ?>vendor/date-picker/bootstrap-datepicker.min.css"></script> -->

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('asset/'); ?>js/demo/datatables-demo.js"></script>


</body>

</html>