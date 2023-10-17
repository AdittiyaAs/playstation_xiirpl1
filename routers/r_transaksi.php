<?php
include_once "../controllers/c_penyewaan.php";
include_once "../controllers/c_transaksi.php";
$transaksi = new c_transaksi();


if ($_GET["aksi"] == "edit") {
    $id = $_POST["id"];
    $tanggal= $_POST["tanggal"];
    $nama_penyewa = $_POST["nama_penyewa"];
    $jenis_playstation = $_POST["jenis_playstation"];
    $jumlah_biling = $_POST["jumlah_biling"];
    $harga = $_POST["harga"];


    if ($transaksi) {
        echo "<script> alert('Data berhasil di ubah');
        document.location.href = '../views/transaksi.php';
        </script>";
    }

} elseif ($_GET["aksi"] == "delete") {
    $id = $_GET["id"];
    $transaksi->delete($id);
}
