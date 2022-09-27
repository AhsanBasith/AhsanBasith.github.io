<?php

include 'koneksi.php';

$no_ktp = $_POST['no_ktp'];
$nama_pemilik = $_POST['nama_pemilik'];
$alamat_pemilik = $_POST['alamat_pemilik'];
$pekerjaan = $_POST['pekerjaan'];


$query = "INSERT INTO pemilik_kendaraan (no_ktp,nama_pemilik,alamat_pemilik,pekerjaan) 
          VALUES ('$no_ktp','$nama_pemilik','$alamat_pemilik','$pekerjaan')";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../Admin/pemilik-kendaraan.php');;
}
