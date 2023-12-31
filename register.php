<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Anda!!!</h1>
                            </div>
                            <form action="routers/r_login.php?aksi=register" method="post" class="user">
                                
                            <div class="form-group">
                                    <input type="id" class="form-control form-control-user" id="id" name="id"
                                        placeholder="id" hidden>
                                </div>

                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama" name="nama"
                                        >
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" placeholder="Email" name="email"
                                        >
                                </div> 

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="pass" placeholder="Password" name="pass" 
                                        >
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="role" value="user" hidden>
                                </div>
                                
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="photo" value="" hidden>
                                </div> -->
                                <div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="register" id="" name="login">
                                </div>

                                
                            </form>
                            <hr>
                            
                            <div class="text-center">
                                <a class="small" href="index.php">Already have an account? Login!</a>
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

</body>

</html>