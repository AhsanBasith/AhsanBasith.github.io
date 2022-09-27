<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_kwitansi = $_POST['id_kwitansi'];
$id_wp = $_POST['id_wp'];
$id_kendaraan = $_POST['id_kendaraan'];
$no_kwitansi = $_POST['no_kwitansi'];
$tanggal_penetapan = $_POST['tanggal_penetapan'];
$petugas_penetapan = $_POST['petugas_penetapan'];
$tarif_biaya = $_POST['tarif_biaya'];
$denda = $_POST['denda'];
$keterangan_lunas = $_POST['keterangan_lunas'];


// query SQL untuk Update data
$query = "UPDATE kwitansi SET no_kwitansi='$no_kwitansi',tanggal_penetapan='$tanggal_penetapan',petugas_penetapan='$petugas_penetapan',tarif_biaya='$tarif_biaya',denda='$denda',keterangan_lunas='$keterangan_lunas'  
          WHERE id_kwitansi='$id_kwitansi'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header('location:../Admin/kwitansi.php');
