<?php

$Page = "Dashboard";
require "includes/header.php";

include '../config/koneksi.php';

$get1 = mysqli_query($koneksi, "SELECT * FROM kendaraan");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi, "SELECT * FROM pemilik_kendaraan");
$count2 = mysqli_num_rows($get2);

$get3 = mysqli_query($koneksi, "SELECT * FROM kwitansi");
$count3 = mysqli_num_rows($get3);

$get4 = mysqli_query($koneksi, "SELECT * from kwitansi where keterangan_lunas='Lunas'");
$count4 = 0;
while ($data = $get4->fetch_assoc()) {
    $count4 += $data['tarif_biaya'] + $data['denda'];
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kendaraan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count1 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-car fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pemilik Kendaraan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count2 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Kwitansi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count3 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-scroll fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pajak yang terkumpul</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp<?php echo number_format($count4, 0, ',', '.'); ?>,-</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
require "includes/footer.php"; ?>