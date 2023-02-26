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
                    <a class="navbar-brand mb-0 h1" href="index.php.php">RESTORAN ENAK TENAN</a>
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
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h5 class="m-2 font-weight-bold text-success">Tambah Menu Restoran</h5>
                            </div>
                            <div class="card-body">
                                <form action="simpan_menu.php" method="POST">
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Menu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="menu">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="harga">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori" id="flexRadioDefault1" value="Makanan">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Makanan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori" id="flexRadioDefault2" value="Minuman">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Minuman
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success">
                                        <a href="index.php" class="btn btn-danger">Kembali</a>
                                    </div>
                                </form>
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