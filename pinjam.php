<?php 
  require_once "prosses/connect.php";
  include "prosses/validasi.php"; 
  $inv = mysqli_query($sambung,"SELECT * from inventaris");
  $cek = mysqli_num_rows($inv);
  $ainv = mysqli_fetch_assoc($inv);
?>

<html>

<head>
    <title>Pinjam</title>
    <link rel="stylesheet" href="aset/css/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="aset/css/pinjam.css"> -->

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
    margin-top: 250px;
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
    right: 280px;
    width: 1000px;
}


    </style>
</head>

<div class="menu" id="menu">

<ul>
    <li><a href="login.php">KELUAR</a></li>
    <li><a href="IndexAdmin.php#inventaris">Inventaris</a></li>
    <li><a href="riwayat.php">Riwayat</a></li>
    <li><a href="indexadmin.php#welcome">Home</a></li>
</ul>

</div>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                <div class="card-body">
                    
                    <h5 class="card-title text-center">Pinjam</h5>
                    <form class="form-signin">
                    <div class=form-group>
                    <label>Nama Peminjam</label>
                    <select class="form-control" id="exampleFormControlSelect1"  name="pegawai" style="width:75  %"> 
                    <?php
                    $pgw = mysqli_query($sambung,"SELECT * from pegawai");
                    while($p = mysqli_fetch_array($pgw)){
                    echo "<option value=".$p['id_pegawai'].">".$p['nama_pegawai']."</option>";
                    }
                    ?>
                    </select>
                    </div>                    
                    <div class="form-group">
                    <form action="prosses/ppeminjaman.php" method="post">
                    <?php if(isset($_GET['barang'])){
                    echo "<p style='color:red'>Barang tidak cukup</p>";
                    }?>
                    <div class=form-group>
                    <label>Pilih Barang</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="inventaris"> 
                    <?php
                    $inv = mysqli_query($sambung,"SELECT * from inventaris");
                    while($d = mysqli_fetch_array($inv)){
                    echo "<option value=".$d['id_inventaris'].">".$d['nama']."</option>";
                    }
                    ?>
                    <div class=form-group>
                    <label>Jumlah</label>
                    <input type="number" name="jp" placeholder=jumlah required>
                    </div>
                    <div class="form-group">                    
                    <input type="date" name="date" max="3000-12-31" min="1000-01-01" class="form-control date">
                    </div>
                    <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Proses">
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>