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
                            <th>Nama Pemilik</th>
                            <th>No.KTP</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Pemilik</th>
                            <th>No.KTP</th>
                            <th>Office</th>
                            <th>Pekerjaan</th>
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
                                <td><?php echo $row['nama_pemilik']; ?></td>
                                <td><?php echo $row['no_ktp']; ?></td>
                                <td><?php echo $row['alamat_pemilik']; ?></td>
                                <td><?php echo $row['pekerjaan']; ?></td>
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