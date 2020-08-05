<?php 

require '../config/config.php';

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = '../index.php';
        </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan!');
        </script>";
    }
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
    <link rel="stylesheet" href="./style.css">
 
    <title>Tugas 10 - Arkademy | Tambah Data</title>
  </head>
  <body>
    
    <!-- Main Area -->
    <main>
        <div id="tambahData" class="pt-4">
            <div class="container">
                <div class="row mb-4">
                    <div class="col">
                        <h1 class="title-text">Tambah Data Produk</h1>
                    </div>
                    <div class="col text-right">
                        <a href="../index.php" class="btn btn-danger">Keluar</a>
                    </div>
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col">
                                <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <textarea name="keterangan" class="form-control" cols="30" rows="10">Keterangan</textarea>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <input type="text" class="form-control" name="harga" placeholder="Harga Produk">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Produk">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" name="tambah" class="btn btn-secondary">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </form>
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