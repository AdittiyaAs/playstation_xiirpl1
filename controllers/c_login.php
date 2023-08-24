<?php 

session_start();

//memanggil file koneksi kedalam file c_login
include_once 'c_koneksi.php';

//membuat kelas dari file c_login, harus sama dengan nama file
    class c_login{

        //membuat method atau fungsi menampung data dari form register yg diinput user kedalam tabel users
        public function register($id, $nama, $email, $pass, $role){

            //membuat fariabel yg bertipe data objek dari kelas c_koneksi
            $conn = new c_koneksi();

            //perintah untuk memasukan data register ke dalam tabel users
            $sql = "INSERT INTO users VALUES ('$id','$nama','$email','$pass','$role','')";

            //menjalankan perintah dalam sql dengan 2 parameter, 1. koneksi, 2. perintahnya
            $query = mysqli_query($conn->conn(), $sql);

            //mengecek kondisi data berhasil atau tidak 
            if ($query) {

                echo "<script> alert('Data Berhasil Ditambahkan!!!!!!!');
                document.location.href = '../  index.php;
                </script>";
                

            }else {


                echo "<script> alert('Data Gagal Ditambahkan');
                document.location.href = '../register.php;
                </script>";
                
            }
             
        }

        //fungsi mengatur proses identifikasi login
        public function login($email = null, $pass = null){

            $conn = new c_koneksi();

            //untuk mengecek apakah tombol login ditekan, jika ditekan akan menjalankan perintah 
            if (isset($_POST['login'])){

            //menampilkan semua data dari tabel user berdasarkan email dari user   
            $sql = "SELECT * FROM users WHERE email = '$email'";

            $query = mysqli_query($conn->conn(), $sql);

            //merubah data menjadi array asosiatif
            $data = mysqli_fetch_assoc($query);


                
                if ($data){

                    //untuk mengecek password dari form login dan password dari tabel user
                    if(password_verify($pass, $data['password'])){


                        //untuk mengecek role user
                        if($data['role'] == 'admin'){
 
                            //membuat variabel session yg nantinya akan digunakan pada halaman form admin 
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
                        echo "<script>alert('Salah belegugg');document.location.href='../index.php';</script>";
                    }
                }else{
                    echo "<script>alert('Salah belegugg');document.location.href='../index.php';</script>";
                }

            }

        }

        public function logout(){

            //menghentikan session
            session_destroy();

            header("location: ../index.php");
            exit;

        }
    }



?>