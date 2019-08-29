<html>

<head>
<title>ADMIN INDEX</title>
<link rel="stylesheet" href="aset/css/bootstrap/css/bootstrap.min.css">

<style>
.menu{
    height: 56px;
	width: 100%;
    background-color: blue;

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

html{
    scroll-behavior: smooth;
}
div.welcome{
	width: 100%;
	height: 700px;
	background: url(aset/img/1.jpg);
	background-size: cover;
	background-attachment: fixed; 
	float: left;
}

div.bayangan{
	width: 100%;
	height: 700px;
	background: black;
	float: left;
	opacity: 0.7;
}

div.welcome h1{
	position: absolute;
	text-align: center;
	color: #fff;
	margin-top: 200px;
	left: 23%; 
	font-size: 100px;
	font-weight: 10;
}

div.about{
	width: 100%;
	height: 400px;
	padding: 0;
/*	margin-top: 50px;*/
/*	background: lightblue;*/
	background-attachment: fixed;
	float: left;
}

div.about h1{
	margin-top: 150px;
	text-align: center;
	font-size: 60px;
}

div.about p{
	margin-left: 10px;
	text-align: center;
	font-size: 30px;
	font-weight: 8100;
}

.card-deck{
	left: 20%;
}

div.pinjam{
	margin-top: 100px;
	margin-left: 820px;
}

div.riwayat{
	margin-top: 10px;
}


div.footer{
	width: 100%;
	margin-top: 150px;
	height: auto;
	background: lightgray;
	float: left;
}

div.footer h4{
	text-align: center;
	color: black;
	font-size: 20px;
	font-weight: 200;
	font-family: century gothic;
		
}
</style>
</head>

<body>
	<!-- MenuBar -->
<div class="menu" id="menu">

<ul>
	<li><a href="prosses/logout.php">KELUAR</a></li>
	<li><a href="IndexAdmin.php#inventaris">Peminjaman</a></li>
	<li><a href="IndexAdmin.php#about">About</a></li>
    <li><a href="IndexAdmin.php#welcome">Home</a></li>
</ul>
</div>
<!-- Akhir -->
<div class="welcome" id="welcome">
		<div class="bayangan"></div>
		<h1>Selamat Datang Admin</h1>
		
</div>
<div class="bg">
		
</div>

<div class="about" id="about">
		<h1>siSarPra</h1>
		<p>
		siSarPra merupakan web untuk memfasilitatsi warga sekolah untuk meminjam barang lebih mudah
		</p>
</div>

<!-- card -->

        <div class="card-deck col-md-8" id="inventaris">
        <div class="card">
            <img src="aset/img/pinjam.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
            <h5 class="card-title">Jenis Barang</h5>
            <p class="card-text">Admin bisa melihat jenis barang yang dipinjam oleh user</p>
            <a href="jenisBarang.php" class="btn btn-primary">Jenis Barang</a>
            </div>
        </div>
        <div class="card">
            <img src="aset/img/pinjam.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
            <h5 class="card-title">Jumlah Anggota</h5>
            <p class="card-text">Admin bisa melihat jumlah anggota yang terdaftar di web siSarPra ini</p>
            <a href="anggota.php" class="btn btn-primary">Anggota</a>
            </div>
        </div>
        </div>
		<div class="pinjam"><a href="pinjam.php" ><div class="btn btn-primary" >  <h3> PINJAMKAN BARANG </h3>    </div></a>
		<div class="riwayat"><a href="riwayat.php" ><div class="btn btn-primary" >  <h3> RIWAYAT </h3>    </div></a>
   </div></div>

<!--  -->


<div class="footer">
		<h4>Copyright 2019 © SMK Telkom Malang TEFA Team. All rights reserved.</h4>
	</div>


</body>
</html>