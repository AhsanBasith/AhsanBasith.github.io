<?php
include 'koneksi.php';

$id_kendaraan = $_GET['id_kendaraan'];
$query = "DELETE FROM kendaraan WHERE id_kendaraan ='$id_kendaraan'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../Admin/kendaraan.php');
}
