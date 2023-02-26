<?php
include "konfigurasi2.php";
$nama = $_POST['nama_pelanggan'];
$tanggal = $_POST['tanggal'];
$id_menu = $_POST['id_menu'];
$total = $_POST['total'];
$id_user = $_POST['id_user'];

$sql = "INSERT INTO transaksi (tgl_transaksi, nama_pelanggan, id_menu, total_harga, id_user) values ('" . $tanggal . "', '" . $nama . "', '" . $id_menu . "', '" . $total . "', '" . $id_user . "')";
$a = $koneksi->query($sql);

if ($a == true) {
    header("location:konfirmasi.php");
} else {
    echo "error";
}
