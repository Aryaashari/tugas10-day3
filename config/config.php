<?php 

$db = mysqli_connect("localhost", "root", "", "arkademy");


// Show Data
function show($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;

}

function tambah($data) {
    global $db;
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "INSERT INTO produk VALUES ('', '$nama_produk', '$keterangan', '$harga', '$jumlah')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM produk WHERE id=$id");
    return mysqli_affected_rows($db);
}

function ubah($data) {
    global $db;

    $id = $data["id"];
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $harga = htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $query = "UPDATE produk SET
                nama_produk = '$nama_produk',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah'
                WHERE id = $id
        ";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function cari($keyword) {
    $query = "SELECT * FROM produk WHERE 
                nama_produk LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                jumlah LIKE '%$keyword%'
        ";
    
    return show($query);
}

?>
