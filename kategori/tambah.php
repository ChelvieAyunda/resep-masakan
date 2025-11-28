<?php
include "../../config/db.php";

if(isset($_POST['submit'])){
    $nama = $_POST['nama_kategori'];
    $conn->query("INSERT INTO kategori(nama_kategori) VALUES('$nama')");
    header("Location: ../../pages/kategori.php");
}
?>

<form method="POST">
    <input type="text" name="nama_kategori" placeholder="Nama kategori" required>
    <button type="submit" name="submit">Tambah</button>
</form>
