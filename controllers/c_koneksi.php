<?php 

    class c_koneksi{

        public function conn(){

             $conn = mysqli_connect('localhost', 'root','','playstation');

             if (!$conn){
                die("koneksi gagal:" . mysqli_connect_error());
            
             }else{
                // echo "koneksi ke database berhasil";
                return $conn;
             }
        }
    }

    // $conn= new c_koneksi();
    // $conn-> conn ();

?>