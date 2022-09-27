<?php
$Page = "Ganti Password";
require "includes/header.php";
include '../config/koneksi.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3>Ganti Password</h3>
        </div>
        <div class="card-body">
            <form method="post" action="../config/ganti_password2.php">
                <input type="hidden" name="nama" value="<?= $_SESSION['nama'] ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password Lama</label>
                    <input type="text" name="pass_lama" class="form-control" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password Baru</label>
                    <input type="text" name="pass_baru" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                    <input type="text" name="konfirmasi_pass" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
require "includes/footer.php"; ?>