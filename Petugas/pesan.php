<?php
$Page = "Pesan";
require "includes/header.php";
include '../config/koneksi.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pesan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="../config/hapus_semua_pesan2.php" class="btn btn-danger">Hapus Semua Pesan</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Subject - Pesan</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * from pesan order by id_pesan DESC";
                        $result = mysqli_query($koneksi, $query);

                        if (!$result) {
                            die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                        }

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="text-center">
                                <td class="mailbox-name text-bold"><?php echo $row['nama']; ?></td>
                                <td class="mailbox-subject">
                                    <a href="baca_pesan.php?id=<?php echo $row['id_pesan']; ?>"><b><?php echo $row['subject']; ?></b> - <?php echo substr($row['pesan'], 0, 30) . '...'; ?></a>
                                </td>
                                <td class="mailbox-date"><?php echo $row['email']; ?></td>
                                <td>
                                    <div class="icheck-primary ">
                                        <a href="../config/hapus_pesan2.php?id_pesan=<?php echo $row['id_pesan']; ?>"><i class="fas fa-trash text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php
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