<?php 
require_once "prosses/connect.php";
include "prosses/validasi.php"; 
?>

<html>

<head>
    <title>Riwayat</title>
    <link rel="stylesheet" href="aset/css/bootstrap/css/bootstrap.min.css">
    
    <style>
    :root {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem;
  }
  
  body {
    background: url(aset/img/1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed; 
  }

  .form-control{
      border-radius: 25px;
      height: 50px;
  }
  
  .card-signin {
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  }
  
  .card-signin .card-title {
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem;
  }
  
  .card-signin .card-body {
    padding: 2rem;
  }
  
  .form-signin {
    width: 100%;
  }
  
  .form-signin .btn {
    font-size: 80%;
    border-radius: 5rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s;
  }
  
  .form-label-group {
    position: relative;
    margin-bottom: 1rem;
  }
  
  .form-label-group input {
    height: auto;
    border-radius: 2rem;
  }
  
  .form-label-group>input,
  .form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x);
  }
  
  .form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    /* Override default `<label>` margin */
    line-height: 1.5;
    color: #495057;
    border: 1px solid transparent;
    border-radius: .
    25rem;
    transition: all .1s ease-in-out;
  }
  
  .form-label-group input::-webkit-input-placeholder {
    color: transparent;
  }
  
  .form-label-group input:-ms-input-placeholder {
    color: transparent;
  }
  
  .form-label-group input::-ms-input-placeholder {
    color: transparent;
  }
  
  .form-label-group input::-moz-placeholder {
    color: transparent;
  }
  
  .form-label-group input::placeholder {
    color: transparent;
  }
  
  .form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
  }
  
  .form-label-group input:not(:placeholder-shown)~label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #777;
  }

.container{
    margin-top: 30px;
}

.menu{
    height: 56px;
	width: 100%;
	background-image: linear-gradient(to top, #00000000 0, #2d2d2d 100%);
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

div.menu ul li a:hover{
/*	background: #AAAAAA;*/
	border-bottom: 2px solid red;
/*	color: #7C7C7C;*/
}

.card{
    right: 370px;
    width: 1200px;
}


    </style>

</head>

<body>
<div class="menu" id="menu">

<ul>
    <li><a href="login.php">KELUAR</a></li>
    <li><a href="IndexAdmin.php#inventaris">Inventaris</a></li>
    <li><a href="pinjam.php">Peminjaman</a></li>
    <li><a href="indexadmin.php#welcome">Home</a></li>
</ul>

</div>
<div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                <div class="card-body">
        <div class="tabel">
        <h1 id="lp">Riwayat Peminjaman</h1>
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
        
    </tr>
    </thead>        
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
                echo "<td><a class=table-kembali href='prosses/kembali.php?id=".$d['id_peminjaman']."' >kembali</a></td>";
            }else{
                echo "<td><span class='kbl'>Telah Kembali</spam></td>";
            }
                $h++;
            }
            ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</body>
<a href="print.php" ><div class="btn btn-primary"> <h3> PRINT </h3></div></a>
</html>