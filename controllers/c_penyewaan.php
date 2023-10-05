<?php 


//memanggil file koneksi kedalam file c_login
include_once 'c_koneksi.php';

//membuat kelas dari file c_login, harus sama dengan nama file
    class c_penyewaan{

        //membuat method atau fungsi menampung data dari form register yg diinput user kedalam tabel users
        public function sewa($id, $nama_penyewa, $jenis_playstation, $jumlah_biling){

            //membuat fariabel yg bertipe data objek dari kelas c_koneksi
            $conn = new c_koneksi();

            //perintah untuk memasukan data register ke dalam tabel users
            $sql = "INSERT INTO transaksi VALUES ('$id','$nama_penyewa','$jenis_playstation','$jumlah_biling', '')";

            //menjalankan perintah dalam sql dengan 2 parameter, 1. koneksi, 2. perintahnya
            $query = mysqli_query($conn->conn(), $sql);

            //mengecek kondisi data berhasil atau tidak 
            if ($query) {

                echo "<script> alert('Data Berhasil Ditambahkan!!!!!!!');
                document.location.href = '../  transaksi.php;
                </script>";
                

            }else {


                echo "<script> alert('Data Gagal Ditambahkan');
                document.location.href = '../penyewaan.php;
                </script>";
                
            }
             
        }
    }
?>