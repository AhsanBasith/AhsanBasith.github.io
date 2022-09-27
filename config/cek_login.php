<?php

include "koneksi.php";

$bagian = mysqli_escape_string($koneksi, $_POST['bagian']);
$nama = mysqli_escape_string($koneksi, $_POST['nama']);
$pass = $_POST['password'];
$password = mysqli_escape_string($koneksi, $pass);

$cek_user = mysqli_query($koneksi, "SELECT * FROM admin WHERE nama='$nama' AND bagian='$bagian' ");
$user_valid = mysqli_fetch_array($cek_user);

//pengujian jika username terdaftar
if ($user_valid) {
    //jika username terdaftar :
    //pengecekan password
    if ($password == $user_valid['password']) {
        //jika password sesuai :
        //buat session
        session_start();
        $_SESSION['nama'] = $user_valid['nama'];
        $_SESSION['bagian'] = $user_valid['bagian'];

        //uji level user
        if ($bagian == "Admin") {
            header('location:../Admin/dashboard.php');
        } elseif ($bagian == "Petugas") {
            header('location:../Petugas/dashboard.php');
        }
    } else {
        echo "<script>alert('Maaf, Login gagal, Password anda salah');
        document.location='../login.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login gagal, Username anda tidak terdaftar');
    document.location='../login.php'</script>";
}
