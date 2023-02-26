<?php
include 'konfigurasi2.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from menu where id_menu='$id'");

header("location:index.php");
