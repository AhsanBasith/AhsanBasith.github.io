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
    padding:5px;
}
.right{
    float:right;
}
.left{
    float:left;
    margin: left 10px;
}
.kotak-jumlah{
    border: 3px solid;
    width:170px;
}
</style>';

$id_kwitansi = $_GET['id_kwitansi'];

$query = "SELECT kendaraan.*, kwitansi.*, pemilik_kendaraan.* FROM kwitansi 
    LEFT JOIN kendaraan ON kendaraan.id_kendaraan = kwitansi.id_kendaraan
    LEFT JOIN pemilik_kendaraan ON pemilik_kendaraan.id_wp = 'kwitansi.id_wp' 
    where id_kwitansi= '$id_kwitansi' ";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}

while ($row = mysqli_fetch_assoc($result)) {

    $jumlah = $row['tarif_biaya'] + $row['denda'];

    $html .= '

<div style="width: 100%; display: table;padding: 5px;">
    <div style="display: table-row">
        <div style="width: 620px; display: table-cell;font-size:20px"><b>Pajak kendaraan</b></div>
        <div style="display: table-cell;font-size:20px">Kwitansi</div>
    </div>
</div>
<div style="text-align:right;margin-right:5px">No. ' . $row['no_kwitansi'] . '</div>

<hr style="border: 2px solid black; margin: 10px 5px 10px 5px;">



<table>
<tr>
        <td width="100px;">Nama Pemilik</td>
        <td>:</td>
        <td width="100px">' . $row['nama'] . '</td>
    </tr>

    <tr>
        <td width="100px;">Merk Kendaraan</td>
        <td>:</td>
        <td width="100px">' . $row['merk_kendaraan'] . '</td>
    </tr>
    <tr>
        <td>No.Polisi</td>
        <td>:</td>
        <td>' . $row['no_polisi'] . '</td>
    </tr>
    <tr>
        <td>Kode Lokasi</td>
        <td>:</td>
        <td>' . $row['kode_lokasi'] . '</td>
    </tr>
    <tr>
        <td>Tanggal Penetapan</td>
        <td>:</td>
        <td>' . $row['tanggal_penetapan'] . '</td>
    </tr>
    <tr>
        <td>Petugas</td>
        <td>:</td>
        <td>' . $row['petugas_penetapan'] . '</td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td>' . $row['keterangan_lunas'] . '</td>
    </tr>
    </table>

    
    <span class="left kotak-jumlah"><h5 style="text-align:center;">Total : Rp.' . number_format($jumlah, 0, ',', '.') . ',-</h5></span>

    <span class="right">Kalimantan, ' . date('d M Y') . '</span>

    <p style="text-align:right;margin-right:20px;margin-top: 92px">' . $row['nama'] . '</p>
';
}



$dompdf->set_option('isRemoteEnabled', TRUE);

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A5', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Kwitansi.pdf", array("Attachment" => 0));
