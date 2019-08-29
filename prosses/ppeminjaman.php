<?php
require_once "connect.php";
include "prosses/validasi.php";
$id_inventaris=$_POST['inventaris'];
$inv = mysqli_query($sambung,"SELECT stok_tersedia from inventaris where id_inventaris = '$id_inventaris'");
$ainv = mysqli_fetch_array($inv);
$stok = $ainv['stok_tersedia'];
$jum = $_POST['jp']; 
$stoka = $stok - $jum;
if($stok>0 && $stoka>-1){ 
$id_pegawai=$_POST['pegawai'];
$tanggal=date('y/m/d');
$tgl_kembali=null;
$id_petugas=$_POST['petugas'];
$pengurangan = mysqli_query($sambung,"UPDATE inventaris SET stok_tersedia='$stoka' WHERE id_inventaris = '$id_inventaris' ");
$status="belum kembali";
$pemasukan = mysqli_query($sambung,"INSERT INTO `peminjaman`(`id_peminjaman`, `id_inventaris`, `id_pegawai`, `tgl_pinjam`, `tgl_kembali`, `status`, `id_petugas`, `jumlah_pinjam`) VALUES (NULL,'$id_inventaris','$id_pegawai','$tanggal','$tgl_kembali','$status','$id_petugas','$jum')");
header("location:../indexadmin.php");
}else{
header("location:../peminjaman.php?barang=0");
}
?>