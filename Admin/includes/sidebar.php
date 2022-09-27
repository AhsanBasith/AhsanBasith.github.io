<?php
require "includes/head.php";

include '../config/koneksi.php';

$get1 = mysqli_query($koneksi, "SELECT * FROM kwitansi where keterangan_lunas='Belum Lunas'");
$count1 = mysqli_num_rows($get1);
$get2 = mysqli_query($koneksi, "SELECT * FROM pesan");
$count2 = mysqli_num_rows($get2);
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Pajak Kendaraan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if ($Page == "Dashboard") echo "active"; ?>">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item <?php if ($Page == "Kendaraan") echo "active"; ?>">
                <a class="nav-link" href="kendaraan.php">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Kendaraan</span>
                </a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item <?php if ($Page == "Pemilik Kendaraan") echo "active"; ?>">
                <a class="nav-link" href="pemilik-kendaraan.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pemilik Kendaraan</span>
                </a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item <?php if ($Page == "Kwitansi") echo "active"; ?>">
                <a class="nav-link" href="kwitansi.php">
                    <i class="fas fa-fw fa-scroll"></i>
                    <span>Kwitansi<span>
                            <span class="badge bg-primary text-white shadow"><?= $count1 ?></span>
                </a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item <?php if ($Page == "Detail Pajak") echo "active"; ?>">
                <a class="nav-link" href="detail_pajak.php">
                    <i class="fas fa-fw fa-copy"></i>
                    <span>Detail pajak</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pesan
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item  <?php if ($Page == "Pesan") echo "active"; ?>">
                <a class="nav-link" href="pesan.php">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Pesan</span>
                    <span class="badge bg-primary text-white shadow"><?= $count2 ?></span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item  <?php if ($Page == "Admin") echo "active"; ?>">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Admin</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                Website
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="../index.php" target="_blank">
                    <i class="fas fa-fw fa-external-link-alt"></i>
                    <span>Go to website</span>
                </a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->