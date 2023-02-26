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
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="tambah_menu.php" class="btn btn-success btn-icon-split ">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Tambah Menu</span>
                    </a>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h5 class="m-2 font-weight-bold text-success">Daftar Menu Makanan</h5>
                            </div>
                            <div class="card-body">
                                <div class="my-2"></div>
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Menu</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        include "konfigurasi2.php";
                                        $a = "select * from menu where kategori = 'Makanan'";
                                        $b = $koneksi->query($a);
                                        while ($c = $b->fetch_row()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $c[1]; ?></td>
                                                <td><?php echo $c[2]; ?></td>
                                                <td><?php echo $c[3]; ?></td>
                                                <td>
                                                    <a href="edit_menu.php?id=<?= $c[0]; ?>"><input type="submit" value="Edit" class="btn btn-warning"></a>
                                                    <a href="hapus_menu.php?id=<?= $c[0]; ?>"><input type="reset" value="Hapus" class="btn btn-danger"></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h5 class="m-2 font-weight-bold text-success">Daftar Menu Minuman</h5>
                            </div>
                            <div class="card-body">
                                <div class="my-2"></div>
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Menu</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        include "konfigurasi2.php";
                                        $a = "select * from menu where kategori = 'Minuman'";
                                        $b = $koneksi->query($a);
                                        while ($c = $b->fetch_row()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $c[1]; ?></td>
                                                <td><?php echo $c[2]; ?></td>
                                                <td><?php echo $c[3]; ?></td>
                                                <td>
                                                    <a href="edit_menu.php?id=<?= $c[0]; ?>"><input type="submit" value="Edit" class="btn btn-warning"></a>
                                                    <a href="hapus_menu.php?id=<?= $c[0]; ?>"><input type="reset" value="Hapus" class="btn btn-danger"></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="bootstrap-5.2.2-dist/js/jquery-3.6.1.min.js"></script>
    <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>