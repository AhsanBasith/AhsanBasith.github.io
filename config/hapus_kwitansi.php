<?php
include 'koneksi.php';

$id_kwitansi = $_GET['id_kwitansi'];
// $query = "DELETE FROM kwitansi WHERE id_kwitansi ='$id_kwitansi'";
$query = "DELETE kendaraan.*, kwitansi.*, pemilik_kendaraan.* FROM kwitansi 
          LEFT JOIN kendaraan ON kendaraan.id_kendaraan = kwitansi.id_kendaraan
          LEFT JOIN pemilik_kendaraan ON pemilik_kendaraan.id_wp = kwitansi.id_wp  
          WHERE id_kwitansi ='$id_kwitansi'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
     header('location:../Admin/kwitansi.php');
}
