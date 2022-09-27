<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_kendaraan    = $_POST['id_kendaraan'];
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

// query SQL untuk Update data
$query = "UPDATE kendaraan SET no_polisi='$no_polisi',no_polisi_lama='$no_polisi_lama',no_bpkb='$no_bpkb',
          no_stnk='$no_stnk',no_rangka='$no_rangka',no_mesin='$no_mesin',no_pabean='$no_pabean',kode_lokasi='$kode_lokasi',
          merk_kendaraan='$merk_kendaraan',model_kendaraan='$model_kendaraan',tahun_buat='$tahun_buat',jumlah_roda='$jumlah_roda'
          WHERE id_kendaraan='$id_kendaraan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header('location:../Admin/kendaraan.php');
