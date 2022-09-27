<?php
include 'config/koneksi.php';
$thisPage = "daftar";
include 'includes/header.php';

?>

<!-- form data diri -->
<div class="container mx-auto mt-5 mb-5">
    <div class="row justify-content-center ">
        <div class="col-lg-6">
            <div class="card p-4">
                <h5 class="text-center">Data Diri</h5>
                <form action="data_kendaraan.php" method="POST">
                    <input type="hidden" name="id_wp" value="id_wp">
                    <div class="form-group mt-4">
                        <label>No.KTP</label>
                        <input class="form-control w-100" type="text" name="no_ktp" required>
                    </div>
                    <div class="form-group mt-3">
                        <label>Nama</label>
                        <input class="form-control w-100" type="text" name="nama_pemilik" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control w-100" name="alamat_pemilik" style="height: 102px;" required></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label>Pekerjaan</label>
                        <input class="form-control w-100" type="text" name="pekerjaan" required>
                    </div>
                    <div class="form-group mt-5">
                        <input class="btn btn-primary w-100" type="submit" name="selanjutnya" value="Selanjutnya">
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</div>

<?php
include 'includes/footer.php';
?>