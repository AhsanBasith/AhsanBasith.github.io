<?php
include 'koneksi.php';

$id_wp = $_GET['id_wp'];
$query = "DELETE FROM pemilik_kendaraan WHERE id_wp ='$id_wp'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../Admin/pemilik-kendaraan.php');
}
