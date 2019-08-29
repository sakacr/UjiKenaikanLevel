<?php
require_once "prosses/connect.php";
include "prosses/validasi.php"; 
$id = $_GET['id'];
if(isset($_POST['nama'])){
if($_POST['nama']!=""  && $_POST['jumlah']!="" && $_POST['stok_tersedia']!=""){
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$stok_tersedia = $_POST['stok_tersedia'];
$editquery = mysqli_query($sambung,"UPDATE inventaris SET nama = '$nama', jumlah = '$jumlah', stok_tersedia='$stok_tersedia' WHERE id_inventaris='$id'");
header('location:jenisBarang.php');
}
}
$inven = mysqli_query($sambung,"SELECT * from inventaris where id_inventaris = '$id'");
$dat = mysqli_fetch_array($inven);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/form.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
<center><h1>EDIT INVENTARIS</h1></center>
    <div class="box">
        <center>
    <form method="post">
        <div class="edit-inv">
        <input type="text" name="nama" placeholder="Nama Inventaris" value="<?php echo $dat['nama'];  ?>" required>
        </div>
        <div class="edit-inv">
        <div class="edit-inv">
        <input type="number" name="jumlah" placeholder="Jumlah Total" value="<?php echo $dat['jumlah']; ?>" required>
        </div>
        <div class="edit-inv">
        <input type="number" name="stok_tersedia" placeholder="Stok tersedia" value="<?php echo $dat['stok_tersedia']; ?>" required>
        </div>
        <input type="submit" value="Edit" class="btn">
        </div>
    </form>
    </center>
</div>  
</body>
</html>
