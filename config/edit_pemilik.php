<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_wp    = $_POST['id_wp'];
$no_ktp   = $_POST['no_ktp'];
$nama_pemilik   = $_POST['nama_pemilik'];
$alamat_pemilik   = $_POST['alamat_pemilik'];
$pekerjaan   = $_POST['pekerjaan'];

// query SQL untuk Update data
$query = "UPDATE pemilik_kendaraan SET no_ktp='$no_ktp',nama_pemilik='$nama_pemilik',alamat_pemilik='$alamat_pemilik',pekerjaan='$pekerjaan' 
          WHERE id_wp='$id_wp'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header('location:../Admin/pemilik-kendaraan.php');
