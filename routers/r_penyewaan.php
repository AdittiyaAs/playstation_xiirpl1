<?php

include "../controllers/c_penyewaan.php";

$penyewaan  = new c_penyewaan();


        //penanganan error
            if($_GET["aksi"] == 'sewa') {
                $id = $_POST['id'];
                $nama_penyewa = $_POST['nama_penyewa'];
                $jenis_playstation = $_POST['jenis_playstation'];
                $jumlah_biling = $_POST['jumlah_biling'];
                
            
                $penyewaan->sewa($id, $nama_penyewa, $jenis_playstation, $jumlah_biling);          
                if ($penyewaan) {
                    echo "<script> alert('data berhasil di tambahkan');
                    document.location.href = '../views/transaksi.php';
                    </script>";
                }
            }
?>