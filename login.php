<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('assets/img/bg-pajak1.jpg');
        }

        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: -30px;
            margin-right: 25px;
            position: relative;
            z-index: 2;
            font-size: 25px;
            opacity: 0.6;
        }
    </style>

</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9" style="margin-top:100px">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card p-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>Login</b></h1>
                                    </div>
                                    <form class="user" action="config/cek_login.php" method="POST">
                                        <div class="form-group w-100">
                                            <input type="text" name="nama" class="form-control " id="nama" placeholder="Username">
                                        </div>
                                        <div class="form-group w-100">
                                            <input type="password" name="password" class="form-control " id="password" placeholder="Password">
                                            <span class="fas fa-fw field-icon toggle-password fa-eye"></span>
                                        </div>
                                        <div class="form-group w-100 mb-5">
                                            <select class="form-control " name="bagian">
                                                <option value="Admin">Admin</option>
                                                <option value="Petugas">Petugas</option>
                                            </select>
                                        </div>
                                        <div class="form-group w-100">
                                            <input class="btn btn-primary form-control" type="submit">
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

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- script hidden & show password -->
    <script>
        const togglePassword = document.querySelector('.toggle-password');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>