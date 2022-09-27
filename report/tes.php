<?php
include '../config/koneksi.php';
require_once '../vendor/autoload.php';


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '
<style>
table, th, td {
    font-size:12px;
    border: 1px solid black;
    border-collapse: collapse;
    padding:5px;
}
</style>

<img src="../assets/img/logo.png" style="float: left; height: 60px;">

<div style="margin-left: 20px;">
    <div style="font-size: 18px">Kwitansi</div>
    <div style="font-size: 20px">Pajak Kendaraan</div>
</div>

<hr style="border: 0.5px; margin: 10px 5px 10px 5px;">

<div style="font-size: 12px;margin-left: 4px">Tanggal CETAK: ' . date("d-m-y") . '</div>

<table width="100%">
    <tr>
        <td>No</td>
        <td>Nama Pemilik</td>
        <td>Merk Kendaraan</td>
        <td>No.Polisi</td>
        <td>Tanggal Daftar</td>
        <td>Kode Lokasi</td>
        <td>Tanggal Penetapan</td>
        <td>Petugas</td>
        <td>No.Kwitansi</td>
        <td>Tarif Biaya</td>
        <td>Denda</td>
        <td>Keterangan</td>
    </tr>';

$query = "SELECT kendaraan.*, kwitansi.*, pemilik_kendaraan.* FROM kwitansi 
    LEFT JOIN kendaraan ON kendaraan.id_kendaraan = kwitansi.id_kendaraan
    LEFT JOIN pemilik_kendaraan ON pemilik_kendaraan.id_wp = kwitansi.id_wp";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}
$no = 1;

while ($row = mysqli_fetch_assoc($result)) {

    $html .= '
    <tr class="text-center">
        <th>' . $no++ . '</th>
        <td>' . $row['nama_pemilik'] . '</td>
        <td>' . $row['merk_kendaraan'] . '</td>
        <td>' . $row['no_polisi'] . '</td>
        <td>' . $row['tanggal_daftar'] . '</td>
        <td>' . $row['kode_lokasi'] . '</td>
        <td>' . $row['tanggal_penetapan'] . '</td>
        <td>' . $row['petugas_penetapan'] . '</td>
        <td>' . $row['no_kwitansi'] . '</td>
        <td>' . $row['tarif_biaya'] . '</td>
        <td>' . $row['denda'] . '</td>
        <td>' . $row['keterangan_lunas'] . '</td>
    </tr>';
}
$html .= '
</table>';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Kwitansi.pdf", array("Attachment" => 0));


// <!-- Begin Page Content -->
