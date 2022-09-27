<?php
$Page = "Kwitansi";
require "includes/header.php";
include '../config/koneksi.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kwitansi</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <button class="btn btn-primary" href="#" data-toggle="modal" data-target="#tambahDataKwitansi">
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
                            <th>No.Kwitansi</th>
                            <th>Nama Pemilik</th>
                            <th>Tanggal Daftar</th>
                            <th>Tanggal Penetapan</th>
                            <th>Petugas Penetapan</th>
                            <th>Tarif Biaya</th>
                            <th>Denda</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>No</th>
                            <th>No.Kwitansi</th>
                            <th>Nama Pemilik</th>
                            <th>Tanggal Daftar</th>
                            <th>Tanggal Penetapan</th>
                            <th>Petugas Penetapan</th>
                            <th>Tarif Biaya</th>
                            <th>Denda</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        // $query = "SELECT * FROM kwitansi Order BY id_kwitansi ASC";
                        $query = "SELECT kendaraan.*, kwitansi.*, pemilik_kendaraan.* FROM kwitansi 
                                  LEFT JOIN kendaraan ON kendaraan.id_kendaraan = kwitansi.id_kendaraan
                                  LEFT JOIN pemilik_kendaraan ON pemilik_kendaraan.id_wp = kwitansi.id_wp ";
                        $result = mysqli_query($koneksi, $query);

                        if (!$result) {
                            die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                        }
                        $no = 1;

                        while ($row = mysqli_fetch_assoc($result)) {
                            $id_kwitansi = $row['id_kwitansi'];
                        ?>
                            <tr class="list-data text-center">
                                <th><?php echo $no ?></th>
                                <td><?php echo $row['no_kwitansi']; ?></td>
                                <td><?php echo $row['nama_pemilik']; ?></td>
                                <td><?php echo $row['tanggal_daftar']; ?></td>
                                <td><?php echo $row['tanggal_penetapan']; ?></td>
                                <td><?php echo $row['petugas_penetapan']; ?></td>
                                <td><?php echo $row['tarif_biaya']; ?></td>
                                <td><?php echo $row['denda']; ?></td>
                                <td><?php echo $row['keterangan_lunas']; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm mb-1" id="tombolEditKwitansi" data-toggle="modal" data-target="#editKwitansi" data-idkw="<?php echo $row['id_kwitansi']; ?>" data-kwitansi="<?php echo $row['no_kwitansi']; ?>" data-tgldaftar="<?php echo $row['tanggal_daftar']; ?>" data-tglpntpn="<?php echo $row['tanggal_penetapan']; ?>" data-petugas="<?php echo $row['petugas_penetapan']; ?>" data-tarif="<?php echo $row['tarif_biaya']; ?>" data-denda="<?php echo $row['denda']; ?>" data-keterangan="<?php echo $row['keterangan_lunas']; ?>">Edit</a>
                                    <a href=" ../config/hapus_kwitansi.php?id_kwitansi=<?= $id_kwitansi ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>

                        <div class="modal fade" id="ketranngan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Keterangan Lunas</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!-- ingat id pada kategori disesuaikan dengan script JS(dibedakan id pada modal tambah dan modal edit) -->
                                    <div class="modal-body">
                                        <form action="../config/konfirmasi_pembayaran.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id_kwitansi" value="<?= $id_kwitansi ?>" id="id_kwitansi">
                                            <div class="form-group">
                                                <span>Konfirmasi Pembayaran?</span>
                                            </div>
                                            <input class="btn btn-primary btn-user btn-block" type="submit" name="pembayaran" value="Konfirmasi">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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