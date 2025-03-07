<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $merek = $_POST['merek'];
    $price = $_POST['price'];
    
    $sql = "INSERT INTO product (product_name, merek, price) VALUES ('$name', '$merek', '$price')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Produk berhasil ditambahkan!'); window.location='index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Nama Produk" required>
        <input type="text" name="merek" placeholder="Merek Produk" required>
        <input type="number" name="price" placeholder="Harga" required>
        <button type="submit">Tambah</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
