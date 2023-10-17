<?php 


//memanggil file koneksi kedalam file c_login
include_once 'c_koneksi.php';

//membuat kelas dari file c_login, harus sama dengan nama file
    class c_penyewaan{

        function harga_sewa($id){

            $conn = new c_koneksi();


            $sql = "SELECT id, nama_barang, harga FROM barang WHERE id = $id";

            $query = mysqli_query($conn->conn(), $sql);

            while ($d = mysqli_fetch_object($query)) {
                $hasil[] = $d;
            }
                return $hasil;

        }

        //membuat method atau fungsi menampung data dari form register yg diinput user kedalam tabel users
        public function sewa($id, $tanggal, $nama_penyewa, $jenis_playstation, $jumlah_biling, $harga){

            //membuat fariabel yg bertipe data objek dari kelas c_koneksi
            $conn = new c_koneksi();

            //perintah untuk memasukan data register ke dalam tabel users
            $sql = "INSERT INTO transaksi VALUES ('$id','$tanggal','$nama_penyewa','$jenis_playstation','$jumlah_biling', '$harga')";

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