<?php
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM product WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Produk berhasil dihapus!'); window.location='index.php';</script>";
}
?>
