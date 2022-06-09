<?php 
session_start();
$id_git = $_GET['id_gitar'];

$keranjang[$id_git] = 1;
 
if(isset($_SESSION['keranjang'][$id_git]))
{
    $_SESSION['keranjang'][$id_git]+=1;
}
else
{
    $_SESSION['keranjang'][$id_git] = 1;
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>