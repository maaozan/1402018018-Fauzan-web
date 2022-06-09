<?php

$user = 'root';
$password ='';
$db = 'userregistration';

session_start();

    $con = mysqli_connect('localhost',$user,$password,$db);
    
    mysqli_select_db($con,'userregistration');

    $pengguna = $_POST['user'];
    $nama = $_POST['name'];
    $mail = $_POST['email'];
    $hp = $_POST['no'];
    $alamat = $_POST['addres'];
    $pass = $_POST['passwd'];

    $s = "select * from usertable where username = '$pengguna'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        Print '<script>alert("Username has been taken!");</script>';
		Print '<script>window.location.assign("register.php");</script>'; 
    }else {
        $reg =  "insert into usertable( username , nama , email , hp , alamat , password) values ('$pengguna' , '$nama' , '$mail' , '$hp' , '$alamat' , '$pass' )";
        mysqli_query($con, $reg);
        Print '<script>alert("Successfully Registered!");</script>'; 
		Print '<script>window.location.assign("login.php");</script>'; 
    }
?>