<?php
$dbHost         = "localhost";
$dbUser         = "root";
$dbPass         = "";
$dbName         = "pos_menu";

$koneksi        = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : ".mysqli_connect_errno();
}
?>