<?php
$Page = "Detail Pajak";
require "includes/header.php";
include '../config/koneksi.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Pajak</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-success" href="#">
                Export Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>No.Kwitansi</th>
                            <th>Nama Pemilik</th>
                            <th>Merk Kendaraan</th>
                            <th>Model Kendaraan</th>
                            <th>No.Polisi</th>
                            <th>No.BPKB</th>
                            <th>No.STNK</th>
                            <th>NO.Rangka</th>
                            <th>No.Mesin</th>
                            <th>No.Pabean</th>
                            <th>Kode Lokasi</th>
                            <th>Tanggal_penetapan</th>
                            <th>Petugas_penetapan</th>
                            <th>Tarif Biaya</th>
                            <th>Denda</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>No</th>
                            <th>No.Kwitansi</th>
                            <th>Nama Pemilik</th>
                            <th>Merk Kendaraan</th>
                            <th>Model Kendaraan</th>
                            <th>No.Polisi</th>
                            <th>No.BPKB</th>
                            <th>No.STNK</th>
                            <th>NO.Rangka</th>
                            <th>No.Mesin</th>
                            <th>No.Pabean</th>
                            <th>Kode Lokasi</th>
                            <th>Tanggal_penetapan</th>
                            <th>Petugas_penetapan</th>
                            <th>Tarif Biaya</th>
                            <th>Denda</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $query = "SELECT kendaraan.*, kwitansi.*, pemilik_kendaraan.* FROM kwitansi 
                                  LEFT JOIN kendaraan ON kendaraan.id_kendaraan = kwitansi.id_kendaraan
                                  LEFT JOIN pemilik_kendaraan ON pemilik_kendaraan.id_wp = kwitansi.id_wp";
                        $result = mysqli_query($koneksi, $query);

                        if (!$result) {
                            die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                        }
                        $no = 1;

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="text-center">
                                <th><?php echo $no ?></th>
                                <td><?php echo $row['no_kwitansi']; ?></td>
                                <td><?php echo $row['nama_pemilik']; ?></td>
                                <td><?php echo $row['merk_kendaraan']; ?></td>
                                <td><?php echo $row['model_kendaraan']; ?></td>
                                <td><?php echo $row['no_polisi']; ?></td>
                                <td><?php echo $row['no_bpkb']; ?></td>
                                <td><?php echo $row['no_stnk']; ?></td>
                                <td><?php echo $row['no_rangka']; ?></td>
                                <td><?php echo $row['no_mesin']; ?></td>
                                <td><?php echo $row['no_pabean']; ?></td>
                                <td><?php echo $row['kode_lokasi']; ?></td>
                                <td><?php echo $row['tanggal_penetapan']; ?></td>
                                <td><?php echo $row['petugas_penetapan']; ?></td>
                                <td><?php echo $row['tarif_biaya']; ?></td>
                                <td><?php echo $row['denda']; ?></td>
                                <td><?php echo $row['keterangan_lunas']; ?></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
require "includes/footer.php"; ?>