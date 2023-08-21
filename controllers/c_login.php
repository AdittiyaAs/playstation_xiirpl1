<?php 

session_start();

include_once 'c_koneksi.php';

    class c_login{

        public function register($id, $nama, $email, $pass, $role){

            $conn = new c_koneksi();

            $sql = "INSERT INTO users VALUES ('$id','$nama','$email','$pass','$role','')";

            $query = mysqli_query($conn->conn(), $sql);

            if ($query) {

                echo "data tidak gagal ditambahkan";

            }else {


                echo "data gagal ditambahkan";
                
            }
             
        }

        public function login($email = null, $pass = null){

            $conn = new c_koneksi();

            if (isset($_POST['login'])){

            $sql = "SELECT * FROM users WHERE email = '$email'";

            $query = mysqli_query($conn->conn(), $sql);

            $data = mysqli_fetch_assoc($query);


                if (data){
                    if(password_verify($pass, $data, ['password'])){


                        if($data['role'] == 'admin'){

                            $_SESSION["data"] = $data;
                            $_SESSION["role"] = $data['role'];

                            header ("Location: ../views/home.php");
                            exit;


                        } else if($data['role'] == 'user'){
                            $_SESSION["data"] = $data;
                            $_SESSION["role"] = $data['role'];

                            header ("Location: ../views/home_user.php");
                            exit;

                        }
                    }else {
                        echo "<script>alert('Login gagal !!! Silahkan cek email dan password');windows.location='../index.php'</script>";
                    }
                }else{
                    echo "<script>alert('Login gagal !!! Silahkan cek email dan password');windows.location='../index.php'</script>";
                }

            }

        }

        public function logout(){

            session_destroy();

            header("location: ../index.php");
            exit;

        }
    }



?>