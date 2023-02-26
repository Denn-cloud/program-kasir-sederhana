<?php
include("konfigurasi2.php");

$menu       = $_POST['menu'];
$harga      = $_POST['harga'];
$kategori   = $_POST['kategori'];
$status     = $_POST['status'];

if($status == 'edit'){
    $id     = $_POST['id'];
    $menu   = $_POST['menu'];
    $harga   = $_POST['harga'];
    $kategori  = $_POST['kategori'];

    if(!empty($menu) || !empty($harga)){
        include 'konfigurasi2.php';

        mysqli_query($koneksi, "UPDATE menu SET nama_menu='$menu', harga='$harga', kategori='$kategori' where id_menu='$id'");

        header("location:index.php");

}

}else{
    mysqli_query($koneksi,"INSERT INTO menu values('','$menu','$harga','$kategori')");

    echo "Menu berhasil ditambahkan";

    header("location:index.php");
}
