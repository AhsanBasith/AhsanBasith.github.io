<?php
$Page = "Kendaraan";
require "includes/header.php";
include '../config/koneksi.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kendaraan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <button class="btn btn-primary" href="#" data-toggle="modal" data-target="#tambahDataKendaraan">
                Tambah Data
            </button> -->
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
                            <th>ID Kendaraan</th>
                            <th>No.Polisi</th>
                            <th>No.Polisi Lama</th>
                            <th>No.BPKB</th>
                            <th>No.STNK</th>
                            <th>No.Rangka</th>
                            <th>No.Mesin</th>
                            <th>No.Pabean</th>
                            <th>Kode Lokasi</th>
                            <th>Merk Kendaraan</th>
                            <th>Model Kendaraan</th>
                            <th>Tahun Buat</th>
                            <th>Jumlah Roda</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>No</th>
                            <th>ID Kendaraan</th>
                            <th>No.Polisi</th>
                            <th>No.Polisi Lama</th>
                            <th>No.BPKB</th>
                            <th>No.STNK</th>
                            <th>No.Rangka</th>
                            <th>No.Mesin</th>
                            <th>No.Pabean</th>
                            <th>Kode Lokasi</th>
                            <th>Merk Kendaraan</th>
                            <th>Model Kendaraan</th>
                            <th>Tahun Buat</th>
                            <th>Jumlah Roda</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $query = "SELECT *
                                  from kendaraan order by id_kendaraan";
                        $result = mysqli_query($koneksi, $query);

                        if (!$result) {
                            die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                        }
                        $no = 1;

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="text-center">
                                <th><?php echo $no ?></th>
                                <td><?php echo $row['id_kendaraan']; ?></td>
                                <td><?php echo $row['no_polisi']; ?></td>
                                <td><?php echo $row['no_polisi_lama']; ?></td>
                                <td><?php echo $row['no_bpkb']; ?></td>
                                <td><?php echo $row['no_stnk']; ?></td>
                                <td><?php echo $row['no_rangka']; ?></td>
                                <td><?php echo $row['no_mesin']; ?></td>
                                <td><?php echo $row['no_pabean']; ?></td>
                                <td><?php echo $row['kode_lokasi']; ?></td>
                                <td><?php echo $row['merk_kendaraan']; ?></td>
                                <td><?php echo $row['model_kendaraan']; ?></td>
                                <td><?php echo $row['tahun_buat']; ?></td>
                                <td><?php echo $row['jumlah_roda']; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm mb-1" id="tombolEditKendaraan" data-toggle="modal" data-target="#editKendaraan" data-idk="<?php echo $row['id_kendaraan']; ?>" data-polisi="<?php echo $row['no_polisi']; ?>" data-polisilama="<?php echo $row['no_polisi_lama']; ?>" data-bpkb="<?php echo $row['no_bpkb']; ?>" data-stnk="<?php echo $row['no_stnk']; ?>" data-rangka="<?php echo $row['no_rangka']; ?>" data-mesin="<?php echo $row['no_mesin']; ?>" data-pabean="<?php echo $row['no_pabean']; ?>" data-lokasi="<?php echo $row['kode_lokasi']; ?>" data-kendaraan="<?php echo $row['merk_kendaraan']; ?>" data-model="<?php echo $row['model_kendaraan']; ?>" data-tahun="<?php echo $row['tahun_buat']; ?>" data-jumlah="<?php echo $row['jumlah_roda']; ?>">Edit</a>
                                    <!-- <a href="../config/hapus_kendaraan.php?id_kendaraan=<?php echo $row['id_kendaraan']; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a> -->
                                </td>
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