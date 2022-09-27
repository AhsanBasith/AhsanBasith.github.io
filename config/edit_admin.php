<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_admin    = $_POST['id_admin'];
$nama   = $_POST['nama'];
$password   = $_POST['password'];
$bagian   = $_POST['bagian'];

// query SQL untuk Update data
$query = "UPDATE admin SET nama='$nama',password='$password',bagian='$bagian'
          WHERE id_admin='$id_admin'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header('location:../Admin/admin.php');
