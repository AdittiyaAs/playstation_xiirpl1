<?php
include_once "c_koneksi.php";
class c_transaksi
{
   
    public function read()
    {
        $conn = new c_koneksi();
        // perintah mengambil semua data dari barang dan mengurutkan sesuai data terbaru diatas
        $query = "SELECT * FROM transaksi ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);

        // mengubah query data menjadi objek
        while ($row = mysqli_fetch_object($data)) {
            // array kosong untuk menampung data objek
            $rows[] = $row;
        }

        // mengembalikan nilai
        if (!empty($rows)) {
            return $rows;
        }
    }

    public function edit($id)   
    {
        $conn = new c_koneksi();

        // perintah mengambil data dari barng berdasarkan id
        $query = "SELECT * FROM transaksi WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function delete($id)
    {
        $conn = new c_koneksi();

        // perintah untuk menghapus data dari barang berdasarkan id
        $query = "DELETE FROM transaksi WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);

        header("Location: ../views/transaksi.php");
    }
}
