<?php

session_start();
unset($_SESSION['nama']);
unset($_SESSION['password']);
unset($_SESSION['level']);

session_destroy();

header('location:../login.php');
//echo "<script>alert('anda berhasil keluar ');
//document.location='../../login/login.php' </script>";
