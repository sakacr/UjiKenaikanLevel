<?php 
require_once "prosses/connect.php";
include "prosses/validasi.php"; 
?>
<!DOCTYPE html>
<html>

<style>
    .judul{
    margin-top: 10px;
    margin-left: 30%;
    }

    .tabel{
	margin-top: 50px;
	width: 90%;
	border: 1px solid;
	margin-left: 5%;
}
</style>

<head>
    <title>PRINT LAPORAN INVENTARIS</title>
    <link rel="stylesheet" href="aset/css/bootstrap/css/bootstrap.min.css">
</head>
<body>

	
		<div class="judul"><h2>LAPORAN INVENTARIS TELKOM SCHOOL</h2></div>
	

	<br/>

    <div class="bodyy">

        <div class="tabel">
        <h1 id="lp">LIST INVENTARIS</h1>
        <table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">NO</th>
        <th scope="col">NAMA</th>
        <th scope="col">JUMLAH</th>
        <th scope="col">STOK TERSEDIA</th>
        <?php
            $h=1;
            $inv = mysqli_query($sambung,"SELECT * from inventaris");
            while($d = mysqli_fetch_array($inv)){
                echo "<tr class='tbl-content'>";
                echo "<td>".$h."</td>";
                echo "<td>".$d['nama']."</td>";
                echo "<td>".$d['jumlah']."</td>";
                echo "<td>".$d['stok_tersedia']."</td>";
                $h++;
            }
        ?>
        </table>
        </div>
       
        <div class="tabel">
        <h1 id="lp">RIWAYAT PEMINJAMAN</h1>
        <table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">NO</th>
        <th scope="col">ID PEMINJAMAN</th>
        <th scope="col">ID INVENTARIS</th>
        <th scope="col">ID PEGAWAI</th>
        <th scope="col">TANGGAL PINJAM</th>
        <th scope="col">TANGGAL KEMBALI</th>
        <th scope="col">STATUS</th>
        <th scope="col">ID PETUGAS</th>
        <th scope="col">JUMLAH PINJAM</th>
        <th scope="col">PENGEMBALIAN</th>
        <?php
            $h=1;
            $pm = mysqli_query($sambung,"SELECT * FROM peminjaman");
            while($d = mysqli_fetch_array($pm)){
                echo "<tr class='tbl-content'>";
                echo "<td>".$h."</td>";
                echo "<td>".$d['id_peminjaman']."</td>";
                echo "<td>".$d['id_inventaris']."</td>";
                echo "<td>".$d['id_pegawai']."</td>";
                echo "<td>".$d['tgl_pinjam']."</td>";
                echo "<td>".$d['tgl_kembali']."</td>";
                echo "<td>".$d['status']."</td>";
                echo "<td>".$d['id_petugas']."</td>";
                echo "<td>".$d['jumlah_pinjam']."</td>";
                if($d['status']!='kembali'){

            }else{
                echo "<td><span class='kbl'>Telah Kembali</spam></td>";
            }
                    $h++;
            }
        ?>
        </table>
        </div>
        
        <div class="tabel">
        <h1 id="lp">LIST PEGAWAI</h1>
        <table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">NO</th>
        <th scope="col">NAMA</th>
        <th scope="col">TELEPON</th>
        <th scope="col">ALAMAT</th>
        <?php
            $h=1;
            $inv = mysqli_query($sambung,"SELECT * from pegawai");
            while($d = mysqli_fetch_array($inv)){
                echo "<tr class='tbl-content'>";
                echo "<td>".$h."</td>";
                echo "<td>".$d['nama_pegawai']."</td>";
                echo "<td>".$d['telp']."</td>";
                echo "<td>".$d['alamat']."</td>";
                
                $h++;
            }
        ?>
        </table>

    </div>
	
	<script>
		window.print();
	</script>
	
</body>
</html>