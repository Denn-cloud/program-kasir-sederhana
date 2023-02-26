<?php

$name = "";
$date = "";
$menu = "";
$jumlah = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nama_cus"];
    $date = $_POST["tanggal"];
    $menu = $_POST["menu"];
    $jumlah = $_POST["jumlah"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Enak Tenan</title>
    <link href="bootstrap-5.2.2-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-dark bg-success">
                <div class="container-fluid">
                    <a class="navbar-brand mb-0 h1" href="index.php">RESTORAN ENAK TENAN</a>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <span class="text-light fs-6">Daftar Menu</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transaksi.php">
                                <span class="text-light fs-6">Transaksi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h5 class="m-2 font-weight-bold text-success">Transaksi Pembelian</h5>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Customer</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_cus">
                                            <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Nama Menu</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="menu">
                                                <?php
                                                include 'konfigurasi2.php';
                                                $sql = "SELECT * FROM menu";
                                                $b = $koneksi->query($sql);
                                                while ($c = $b->fetch_array()) {
                                                ?>
                                                    <option value="<?php echo $c['id_menu'] ?>">
                                                        <?php echo $c['nama_menu'] ?>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="jumlah">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input type="submit" name="submit" value="Pesan" class="btn btn-success">
                                        <a href="index.php" class="btn btn-danger">Batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    include "konfigurasi2.php";
                    $a = "select * from menu where id_menu='$menu'";
                    $b = $koneksi->query($a);

                    echo '<div class="col-lg-4">';
                    echo '<div class="card shadow mb-4">';
                    echo '<div class="card-header py-3">';
                    echo '<h5 class="m-2 font-weight-bold text-success">' . 'Daftar Pesanan' . '</h5>';
                    echo '</div>';
                    echo '<div class="card-body">';
                    echo '<form action="checkout.php" method="POST">';
                    echo '<div class="row mb-3">';
                    echo '<label for="inputEmail3" class="col-sm-4 col-form-label">' . 'Nama Customer' . '</label>';
                    echo '<div class="col-sm-8">';
                    echo '<input type="text" class="form-control" value="' . $name . '" name="nama_pelanggan" readonly>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="row mb-3">';
                    echo '<label for="inputEmail3" class="col-sm-4 col-form-label">' . 'Tanggal' . '</label>';
                    echo '<div class="col-sm-8">';
                    echo '<input type="text" class="form-control" value="' . $date . '" name="tanggal" readonly>';
                    echo '</div>';
                    echo '</div>';
                    while ($c = $b->fetch_array()) {
                        echo '<div class="row mb-3">';
                        echo '<label for="inputEmail3" class="col-sm-4 col-form-label">' . 'Pesanan' . '</label>';
                        echo '<div class="col-sm-8">';
                        echo '<input type="text" class="form-control" name="nama_menu" value="' . $c['nama_menu'] . '" readonly>';
                        echo '<input type="hidden" class="form-control" value="' . $c['id_menu'] . '" name="id_menu">';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="row mb-3">';
                        echo '<label for="inputEmail3" class="col-sm-4 col-form-label">' . 'Total' . '</label>';
                        echo '<div class="col-sm-8">';
                        echo '<input type="text" class="form-control" name="total" value="' . ($c['harga'] * $jumlah) . '" readonly>';
                        echo '<input type="hidden" class="form-control" name="id_user" value="1">';
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '<div class="d-grid gap-2 d-md-flex justify-content-md-end">';
                    echo '<input type="submit" name="submit" value="Checkout" class="btn btn-success">';
                    echo '</div>';
                    echo '</form>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.2.2-dist/js/jquery-3.6.1.min.js"></script>
    <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>