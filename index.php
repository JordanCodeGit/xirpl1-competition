<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index Page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-danau">

    <div class="container">
        <div class="row justify-content-center box-center-v">
            <div class="col-lg-6 col-md-12">
                <div class="card border-0 shadow-lg efek-kaca text-white">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <div id="panel-login-menu" class="panel text-center">
                                        <h1>Diamond Competition ♦️</h1>
                                        <p>Selamat datang ke Diamond Competition!</p>
                                        <p>Silakan pilih keperluan anda:</p>
                                        <div class="dropdown d-inline-block">
                                            <a href="./register.php" class="btn btn-primary" data-toggle="dropdown">Peserta</a>
                                            <div class="dropdown-menu">
                                                <a href="./register.php" class="dropdown-item">Pendaftaran</a>
                                                <a href="./cek_pendaftaran.php" class="dropdown-item">Cek Pendaftaran</a>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <button id="button-panel-login" class="btn btn-warning">Panitia</button>
                                    </div>
                                    <div id="panel-login-form" class="panel" style="display: none;">
                                        <h1>Masuk Panitia</h1>
                                        <p>Masukkan nama pengguna dan kata sandi Anda:</p>
                                        <form action="Login.php" method="post" class="user login mt-5">
                                            <div class="form-group">
                                                <label>Nama Pengguna</label>
                                                <input type="text" name="username" class="form-control form-control-user efek-kaca">
                                            </div>
                                            <div class="form-group">
                                                <label>Kata Sandi</label>
                                                <input type="password" name="password" class="form-control form-control-user efek-kaca">
                                            </div>
                                            <div class="text-right">
                                                <button type="button" id="button-panel-menu" class="btn btn-default text-white float-left">Kembali</button>
                                                <button type="submit" class="btn btn-primary">Masuk</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>