<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->getkoneksi();

if($koneksi->connect_error){
    echo "Gagal koneksi : " . $koneksi->connect_error;
} else{
    echo "Sambungan basis data berhasil";
}


// update stok_barang
// set nama_barang = '{namaBarang}',
//    stok = {stok}
// where kode = {kode};
$query = "update stok_barang" .
      " set nama_barang = '" . $_POST["namaBarang"] . "'," .
      "     stok = " . $_POST["stok"] . " " .
      "where kode = " . $_POST["kode"];

echo $query;
if($koneksi->query($query) === true) {   
    echo "<br> Data " . $_POST["namaBarang"] . "berhasil diubah." .
          '<a href="main.php">Lihat Data</a>';
} else {
    echo "<br> Data GAGAL disimpan";
}

$koneksi->close();
?>

       