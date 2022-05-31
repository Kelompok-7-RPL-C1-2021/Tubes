<?php  //halo yasmin
session_start();
if(!isset($_SESSION['session_email'])){
    header("location:../loginsystem/login.php");
    exit();
}
?>

<!-- require '../partials/checklogin.php'; -->