<?php
require_once "prosses/connect.php";
include "prosses/validasi.php"; 
if(isset($_POST['nama'])){
if($_POST['nama']!="" && $_POST['jumlah']!="" && $_POST['stok_tersedia']!=""){
$id = $_GET['id'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$stok_tersedia = $_POST['stok_tersedia'];
$editquery = mysqli_query($sambung,"INSERT INTO inventaris(id_inventaris, nama, jumlah, stok_tersedia) VALUES (NULL,'$nama','$jumlah','$stok_tersedia')");
header('location:jenisBarang.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/form.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/form.css">
    <title>Edit Data</title>
</head>
<body>
    <h1>PENAMBAHAN BARANG</h1>
    <div class="box">
        
    <form method="post">
        <div class="edit-inv">
        <input type="text" name="nama" placeholder="Nama Inventaris" required>
        </div>
        <div class="edit-inv">
        <input type="number" name="jumlah" placeholder="Jumlah Total" required>
        </div>
        <div class="edit-inv">
        <input type="number" name="stok_tersedia" placeholder="Stok tersedia" required>
        </div>
        <input type="submit" value="Tambah" class="btn">
        </div>
        
    </form>
    </div>
</body>
</html>
