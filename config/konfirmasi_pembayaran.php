<?php
include 'koneksi.php';

if (isset($_POST['pembayaran'])) {

    $id_kwitansi = $_POST['id_kwitansi'];

    // eksekusi
    $update_status = mysqli_query($koneksi, "UPDATE kwitansi set keterangan_lunas='Lunas' where id_kwitansi='$id_kwitansi' ");

    

    if ($update_status) {
        // jika berhasil
        header('location:../Admin/kwitansi.php');
    } else {
        // Jika gagal
        echo '
        <script>
        alert("Gagal");
        window.location.href="../Admin/kwitansi.php"
        </script>
        ';
    }
}
