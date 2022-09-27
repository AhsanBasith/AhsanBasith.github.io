<?php
$Page = "Pemilik Kendaraan";
require "includes/header.php";
include '../config/koneksi.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pemilik Kendaraan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <button class="btn btn-primary" href="#" data-toggle="modal" data-target="#tambahDatapemilik">
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
                            <th>ID Pemilik</th>
                            <th>ID Kendaraan</th>
                            <th>No.KTP</th>
                            <th>Nama Pemilik</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>No</th>
                            <th>ID Pemilik</th>
                            <th>ID Kendaraan</th>
                            <th>No.KTP</th>
                            <th>Nama Pemilik</th>
                            <th>Office</th>
                            <th>Pekerjaan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $query = "SELECT * from pemilik_kendaraan order by id_wp";
                        $result = mysqli_query($koneksi, $query);

                        if (!$result) {
                            die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                        }
                        $no = 1;

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="text-center">
                                <th><?php echo $no ?></th>
                                <td><?php echo $row['id_wp']; ?></td>
                                <td><?php echo $row['id_kendaraan']; ?></td>
                                <td><?php echo $row['no_ktp']; ?></td>
                                <td><?php echo $row['nama_pemilik']; ?></td>
                                <td><?php echo $row['alamat_pemilik']; ?></td>
                                <td><?php echo $row['pekerjaan']; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" id="tombolEditPemilik" data-toggle="modal" data-target="#editPemilik" data-id="<?php echo $row['id_wp']; ?>" data-ktp="<?php echo $row['no_ktp']; ?>" data-nama="<?php echo $row['nama_pemilik']; ?>" data-alamat="<?php echo $row['alamat_pemilik']; ?>" data-pekerjaan="<?php echo $row['pekerjaan']; ?>">Edit</a>
                                    <!-- <a href="../config/hapus_pemilik.php?id_wp=<?php echo $row['id_wp']; ?>" class="btn btn-danger btn-sm">Hapus</a> -->
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