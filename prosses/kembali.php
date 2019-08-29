<?php
require_once "connect.php";
include "prosses/validasi.php"; 
$id_pem=$_GET['id'];
$tgl = date("y/m/d");
$pmj = mysqli_query($sambung,"SELECT * from peminjaman where id_peminjaman = '$id_pem'");
$amj = mysqli_fetch_array($pmj);
$id_inventaris = $amj['id_inventaris'];
$jp = $amj['jumlah_pinjam'];
$kembali = mysqli_query($sambung,"UPDATE peminjaman SET status='kembali', tgl_kembali='$tgl' where id_peminjaman = '$id_pem'");
$inv = mysqli_query($sambung,"SELECT stok_tersedia from inventaris where id_inventaris = '$id_inventaris'");
$ainv = mysqli_fetch_array($inv);
$stok = $ainv['stok_tersedia'];
$stoka = $stok + $jp;
$kembali = mysqli_query($sambung,"UPDATE inventaris SET stok_tersedia ='$stoka' where id_inventaris = '$id_inventaris' ");  
header("location:../home.php");
?>  