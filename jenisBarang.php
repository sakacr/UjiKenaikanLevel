<?php 
require_once "prosses/connect.php";
include "prosses/validasi.php"; 
?>

<html>

<head><title>Jenis Barang</title>
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
      <th scope="col">Jenis Barang</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Stok Barang</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <?php
            $h=1;
            $inv = mysqli_query($sambung,"SELECT * from inventaris");
            while($d = mysqli_fetch_array($inv)){
                echo "<tr class='tbl-content'>";
                echo "<td>".$h."</td>";
                echo "<td>".$d['nama']."</td>";
                echo "<td>".$d['jumlah']."</td>";
                echo "<td>".$d['stok_tersedia']."</td>";
                echo "<td><a class=table-edit href='editBarang.php?id=".$d['id_inventaris']."'>EDIT<a><a class=table-delete href='prosses/delete.php?id=".$d['id_inventaris']."'>DELETE<a></td>";
                $h++;
            }
        ?>
</table>
<a href="tambahBarang.php" ><div class="btn btn-primary">  <h3> Tambah Barang </h3></div></a>

</div>

<!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>