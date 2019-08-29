<?php
session_start();
if(isset($_SESSION['akun'])){
    header('location:indexadmin.php');
}
?>
<html>

<head>
    <title>LOGIN Page</title>
    <link rel="stylesheet" href="aset/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="aset/css/login.css">
    <link rel="stylesheet" href="aset/css/css/all.css">
</head>
<body>

  <?php
  if(isset($_GET['salah'])){
  echo "<span style='color:red'>".($_GET['salah'])."</span>";
  }
  ?>


<!-- icon LOGIN DURUNG -->

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
              
            <h5 class="card-title text-center">Masuk</h5>
            <form action="prosses/login.php" method="post" class="form-signin">
              <div class="form-label-group">
                <input name="email" id="inputEmail" type="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Alamat Email</label>
              </div>

              <div class="form-label-group">
                <input name="password" id="inputPassword" type="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Kata Sandi</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input name="password" type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Ingat Sandi</label>
              </div>
              <input type="submit" value="MASUK" class="btn btn-lg btn-primary btn-block text-uppercase">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>