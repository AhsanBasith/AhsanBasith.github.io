<?php

include 'koneksi.php';

$no_polisi = $_POST['no_polisi'];
$no_polisi_lama = $_POST['no_polisi_lama'];
$no_bpkb = $_POST['no_bpkb'];
$no_stnk = $_POST['no_stnk'];
$no_rangka = $_POST['no_rangka'];
$no_mesin = $_POST['no_mesin'];
$no_pabean = $_POST['no_pabean'];
$kode_lokasi = $_POST['kode_lokasi'];
$merk_kendaraan = $_POST['merk_kendaraan'];
$model_kendaraan = $_POST['model_kendaraan'];
$tahun_buat = $_POST['tahun_buat'];
$jumlah_roda = $_POST['jumlah_roda'];

$query = "INSERT INTO kendaraan (no_polisi,no_polisi_lama,no_bpkb,no_stnk,no_rangka,no_mesin,no_pabean,kode_lokasi,merk_kendaraan,model_kendaraan,tahun_buat,jumlah_roda) 
          VALUES ('$no_polisi','$no_polisi_lama','$no_bpkb','$no_stnk','$no_rangka','$no_mesin','$no_pabean','$kode_lokasi','$merk_kendaraan','$model_kendaraan','$tahun_buat','$jumlah_roda')";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../Admin/kendaraan.php');;
}
