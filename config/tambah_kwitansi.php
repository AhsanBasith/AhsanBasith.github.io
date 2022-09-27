<?php

include 'koneksi.php';

$id_wp = $_POST['id_wp'];
$id_kendaraan = $_POST['id_kendaraan'];
$no_kwitansi = $_POST['no_kwitansi'];
$tanggal_penetapan = $_POST['tanggal_penetapan'];
$petugas_penetapan = $_POST['petugas_penetapan'];
$tarif_biaya = $_POST['tarif_biaya'];
$denda = $_POST['denda'];


$query = "INSERT INTO kwitansi (id_wp,id_kendaraan,no_kwitansi,tanggal_penetapan,petugas_penetapan,tarif_biaya,denda) 
          VALUES ('$id_wp','$id_kendaraan','$no_kwitansi','$tanggal_penetapan','$petugas_penetapan','$tarif_biaya','$denda')";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../Admin/kwitansi.php');;
}
