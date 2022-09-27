<?php
$Page = "Baca Pesan";
require "includes/header.php";
include '../config/koneksi.php';

if (isset($_GET['id'])) {
    $query = "SELECT * from pesan
              WHERE pesan.id_pesan = '" . $_GET['id'] . "'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
    // $tgl = date('l, d-m-Y | h:i:sa');

    if (!count($data)) {
        echo "<script>alert('Pesan tidak ditemukan!');window.location='pesan.php';</script>";
    }
} else {
    echo "<script>alert('Pilih Pesan terlebih dahulu!');window.location='pesan.php';</script>";
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="pesan" type="button" class="btn btn-default border"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Read Mail</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
            <div class="mailbox-read-info">
                <h5><b><?php echo $data['subject']; ?></b></h5>
                <h6>From: <?php echo $data['email']; ?> (<?php echo $data['nama']; ?>)
                    <span class="mailbox-read-time float-right"><?php echo $data['tgl_kirim']; ?></span>
                </h6>
            </div>
            <hr>
            <div class="mailbox-read-message">
                <p><?php echo $data['pesan']; ?></p>

                <p>Terimaksih,<br><?php echo $data['nama']; ?></p>
            </div>
            <!-- /.mailbox-read-message -->
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <!-- <button type="button" class="btn btn-secondary"><i class="fas fa-print"></i> Print</button> -->
        </div>
        <!-- /.card-footer -->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
require "includes/footer.php"; ?>