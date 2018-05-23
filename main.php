<html !DOCTYPE>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<h2>Aplikasi Stok Barang</h2>
<hr>
<a style="font size: 20px; font-color href="input.php"><button type="button" class="btn btn-success">Tambah Data</button></a>
<table border="1">
    <tr>
        <th>KODE</th>
        <th>NAMA BARANG</th>
        <th>STOK</th>
    </tr>
    <?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error){
    echo "<tr><td>";
    echo "Gagal koneksi : " . $koneksi->connect_error;
    echo "</td><tr>";
//} else{
//    echo "<tr><td>";
//    echo "Sambungan basis data berhasil";
//    echo "</td><tr>";
}

$query = "select * from stok_barang";
$data = $koneksi->query($query);
if($data->num_rows <= 0){
    echo "<tr><td>";
    echo "DATA NIHIL";
    echo "</td></tr>";
}else {
    while($row = $data->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["kode"] . "</td>";
        echo "<td>" . $row["nama_barang"] . "</td>";
        echo "<td>" . $row["stok"] . "</td>";
        echo '<td><a href="form-edit.php?kode=' .
            $row["kode"] . '">Edit</a></td>';
        echo '<td><a href="Hapus.php?kode=' .
            $row["kode"] . '">Hapus</a></td>';
        echo "</tr>";
    }
}
    ?>
</table>
</html>