<?php

include "../controllers/c_login.php";

$login  = new c_login();


        //penanganan error
        try {
            if($_GET["aksi"] == 'register') {
                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $role = $_POST['role'];
                // $photo = $_POST['photo'];
            
                $pass = password_hash($pass, PASSWORD_DEFAULT);
            
                $login->register($id, $nama, $email, $pass, $role);

                if($login) {
                    echo "<script> alert('Data Berhasil Ditambahkan!!!!!!!');
                document.location.href = '../index.php;
                </script>";
                }
            
            }elseif ($_GET['aksi'] == 'login'){
                $email = $_POST['email'];
                $pass = $_POST['pass'];
            
                
                
                // // if($email != $pass) {
                //     echo "<script> alert('Salah komtol');
                //     document.location.href '../index.php';
                //     </script>";
                // // } 
                
                $login->login($email, $pass);
            
            }elseif ($_GET['aksi'] == 'logout'){
            
                $login->logout();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }




?>