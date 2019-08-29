<?php
require_once "connect.php";
$id = $_GET['id'];
mysqli_query($sambung,"DELETE FROM `pegawai` WHERE id_pegawai = '$id' ");
header("location:../anggota.php");
?>