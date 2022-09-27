<?php
include 'koneksi.php';

$id_admin = $_GET['id_admin'];
$query = "DELETE FROM admin WHERE id_admin ='$id_admin'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../Admin/admin.php');
}
