<?php
session_start();
if(!isset($_SESSION['akun'])){
    header('location:indexadmin.php');
}
?>