<?php 

require 'config/config.php';

$dataProduk = show("SELECT * FROM produk");


// Fitur search
if (isset($_POST["search"])) {
    $dataProduk = cari($_POST["keyword"]);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Tugas 10 - Arkademy</title>
  </head>
  <body>
    
    <!-- Main Area -->
    <main>
        <div id="home" class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="title-text">Daftar Produk</h1>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <a href="crud/tambah.php" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <form class="form-inline" action="" method="POST">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $i = 1; ?>
                                <?php foreach($dataProduk as $produk) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $produk["nama_produk"] ?></td>
                                        <td><?= $produk["keterangan"] ?></td>
                                        <td><?= $produk["harga"] ?></td>
                                        <td><?= $produk["jumlah"] ?></td>
                                        <td>
                                            <a href="crud/ubah.php?id=<?= $produk["id"]; ?>" class="btn btn-warning">Ubah</a>
                                            <a href="crud/hapus.php?id=<?= $produk["id"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                                        </td>
                                    </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <?php if(count($dataProduk) < 1) : ?>
                    <div class="row">
                        <div class="col">
                            <div class="jumbotron">
                                <h1 class="display-4 text-center text-danger">Data Kosong</h1>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
    <!-- End Main Area -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>