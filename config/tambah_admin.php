<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$password = $_POST['password'];
$bagian = $_POST['bagian'];


$query = "INSERT INTO admin (nama,password,bagian) 
          VALUES ('$nama','$password','$bagian')";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../Admin/admin.php');;
}
