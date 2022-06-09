<?php

include_once 'config/database.php';
include_once 'models/post.php';

$user = 'root';
$password ='';
$db = 'toko_gitar';

session_start();

    $con = mysqli_connect('localhost',$user,$password,$db);
    
    mysqli_select_db($con,'toko_gitar');

    $namagit = $_POST['nama_gitar'];
    $jenisgit = $_POST['jenis_gitar'];
    $desgit = $_POST['deskripsi_gitar'];
    $stokgit = $_POST['stok_gitar'];
    $gambargit = $_POST['gambar_gitar'];

    $s = "select * from toko_gitar where nama_gitar = '$namagit'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        Print '<script>alert("Username has been taken!");</script>';
		Print '<script>window.location.assign("tambah.php");</script>'; 
    }else {
        $reg =  "insert into usertable(nama_gitar , jenis_gitar , deskripsi_gitar , stok_gitar , gambar_gitar) values ('$namagit' , '$jenisgit' , '$desgit' , '$stokgit' , '$gambargit')";
        mysqli_query($con, $reg);
        Print '<script>alert("Successfully Registered!");</script>'; 
		Print '<script>window.location.assign("tambah.php");</script>'; 
    }
?>