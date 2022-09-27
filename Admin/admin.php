<?php
$Page = "Admin";
require "includes/header.php";
include '../config/koneksi.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Admin</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button class="btn btn-primary" href="#" data-toggle="modal" data-target="#tambahDataAdmin">
                Tambah Data
            </button>
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
                            <th>Nama</th>
                            <th>Password</th>
                            <th>Bagian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Password</th>
                            <th>Bagian</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $query = "SELECT * from admin order by id_admin";
                        $result = mysqli_query($koneksi, $query);

                        if (!$result) {
                            die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                        }
                        $no = 1;

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="text-center">
                                <th><?php echo $no ?></th>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['bagian']; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" id="tombolEditAdmin" data-toggle="modal" data-target="#editAdmin" data-id="<?php echo $row['id_admin']; ?>" data-nama="<?php echo $row['nama']; ?>" data-password="<?php echo $row['password']; ?>" data-bagian="<?php echo $row['bagian']; ?>">Edit</a>
                                    <a href="../config/hapus_admin.php?id_admin=<?php echo $row['id_admin']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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