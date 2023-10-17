<?php

include "../controllers/c_penyewaan.php";

$penyewaan  = new c_penyewaan();


        //penanganan error
            if($_GET["aksi"] == 'sewa') {
                $id = $_POST['id'];
                $tanggal = $_POST['tanggal'];
                $nama_penyewa = $_POST['nama_penyewa'];
                $jenis_playstation = $_POST['jenis_playstation'];
                
                
                $jumlah_biling = $_POST['jumlah_biling'];
               

                foreach($penyewaan->harga_sewa($jenis_playstation) as $sewa){

                    $harga = "$sewa->harga";
                    // var_dump($harga);
                    // exit;
                }

                $harga_sewa = $jumlah_biling * $harga ;
                // var_dump($harga);
                // exit;
            
                $penyewaan->sewa($id, $tanggal, $nama_penyewa, $jenis_playstation, $jumlah_biling, $harga_sewa);          
                if ($penyewaan) {
                    echo "<script> alert('data berhasil di tambahkan');
                    document.location.href = '../views/transaksi.php';
                    </script>";
                }
            }
?>