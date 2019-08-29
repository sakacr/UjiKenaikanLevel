<?php
session_start();
if(isset($_SESSION['akun'])){
    $sesid = $_SESSION['akun']['id_petugas'];
    
    echo $sesid;
    
}
?>