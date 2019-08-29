<?php 
	require_once "prosses/connect.php";
	include "prosses/validasi.php"; 
?>

<html>

<head><title>Anggota</title>
<link rel="stylesheet" href="aset/css/bootstrap/css/bootstrap.min.css">
<style>
.menu{
    height: 56px;
	width: 100%;
	background-image: linear-gradient(#4283f4, white);
	font-family: Tw Cen Mt;
	position: fixed;
	top: 0;
	right: 0;
    left: 0;
    z-index: 1;
}
div.menu ul{
	list-style-type: none;
	overflow: hidden;
	padding: 0;
	margin: 0;
	
}

div.menu ul li{
	float: right;
}

div.menu ul li a{
	text-decoration: none;
	color: #fff;
	text-align: center;
	padding: 20px 20px;
	text-transform: uppercase;
	font-weight: bold;
	font-size: 15px;
	display: block;
	position: relative;
	
}

body{
	background-color: white;
}

.tabel{
	margin-top: 300px;
	width: 80%;
	border: 1px solid;
	margin-left: 10%;
}
button{
	margin-left: 5px;
}
</style>
</head>
<body>
<!-- MenuBar -->
<div class="menu" id="menu">

<ul>
	<li><a href="login.php">KELUAR</a></li>
	<li><a href="IndexAdmin.php#inventaris">Peminjaman</a></li>
    <li><a href="IndexAdmin.php#welcome">Home</a></li>
</ul>
</div>
<!-- Akhir -->
<div class="tabel">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Alamat</th>
			<th scope="col">EDIT</th>
    </tr>
  </thead>
  <tbody>
	<?php
            $h=1;
            $inv = mysqli_query($sambung,"SELECT * from pegawai");
            while($d = mysqli_fetch_array($inv)){
                echo "<tr class='tbl-content'>";
                echo "<td>".$h."</td>";
                echo "<td>".$d['nama_pegawai']."</td>";
                echo "<td>".$d['telp']."</td>";
                echo "<td>".$d['alamat']."</td>";
                echo "<td><a class=table-edit href='anggota_edit.php?id=".$d['id_pegawai']."'>EDIT<a><a class=table-delete href='prosses/delete_anggota.php?id=".$d['id_pegawai']."'>DELETE<a></td>";
                $h++;
            }
        ?>
    
  </tbody>
</table>
				<a href="anggota_tambah.php" ><div class="btn btn-primary">  <h3> Tambah Anggota </h3>    </div></a>
</div>



</body>
</html>