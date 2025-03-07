<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM product WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $merek = $_POST['merek'];
    $price = $_POST['price'];
    
    $sql = "UPDATE product SET product_name='$name', merek='$merek', price='$price' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Produk berhasil diperbarui!'); window.location='index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form method="POST">
        <input type="text" name="name" value="<?= $row['product_name'] ?>" required>
        <input type="text" name="merek" value="<?= $row['merek'] ?>" required>
        <input type="number" name="price" value="<?= $row['price'] ?>" required>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
