<?php
require_once "connect.php";
include "prosses/validasi.php";
$email=$_POST["email"];
$password=md5($_POST["password"]);
$akun = mysqli_query($sambung,"SELECT * from petugas where email='$email' and password='$password'");
$cek = mysqli_num_rows($akun);
$aakun = mysqli_fetch_assoc($akun);

if($cek>0){
    session_start();
    $_SESSION['akun']=$aakun;
    header("location: ../indexadmin.php");
}else{
    session_start();
    session_destroy();
    header("location: ../login.php?salah=email/password%20salah");
}

?>