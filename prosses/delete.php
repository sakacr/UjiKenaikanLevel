<?php
require_once "connect.php";
include "prosses/validasi.php"; 
$id=$_GET['id'];
$editquery = mysqli_query($sambung,"DELETE FROM inventaris WHERE id_inventaris='$id'");
header('location:../jenisBarang.php');
?>