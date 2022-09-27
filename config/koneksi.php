<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "pajak_kendaraan";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
