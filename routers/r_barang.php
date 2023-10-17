<?php
include_once "../controllers/c_barang.php";
$barang = new c_barang();

if ($_GET["aksi"] == "tambah") {
    $id = $_POST["id"];
    $nama_barang = $_POST["nama_barang"];
    $harga = $_POST["harga"];

    $photo = $_FILES["photo"]["name"];
    $tmp = $_FILES["photo"]["tmp_name"];

    move_uploaded_file($tmp, '../assets/img/' . $photo);

    $barang->insert($id, $nama_barang, $harga, $photo);

    if ($barang) {
        echo "<script> alert('Data berhasil di tambahkan!');
        document.location.href = '../views/barang.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "edit") {
    $id = $_POST["id"];
    $nama_barang = $_POST["nama_barang"];
    $harga = $_POST["harga"];


    $photo = $_FILES["photo"]["name"];
    $tmp = $_FILES['photo']["tmp_name"];
    move_uploaded_file("$tmp", "../assets/img/" . $photo);

    $barang->update($id, $nama_barang, $harga, $photo);

    if ($barang) {
        echo "<script> alert('Data berhasil di ubah');
        document.location.href = '../views/barang.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete") {
    $id = $_GET["id"];
    $barang->delete($id);
}
