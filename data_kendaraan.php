<?php
include 'config/koneksi.php';

include 'includes/header.php';

?>

<!-- form data diri -->
<div class="container mx-auto mt-5">
    <div class="row justify-content-center ">
        <div class="col-lg-6">
            <div class="card p-5">
                <h5 class="text-center">Data Kendaraan</h5>
                <form action="keterangan.php" method="POST">
                    <div class="form-group mt-4">
                        <label>No.Polisi</label>
                        <input class="form-control w-100" type="text" name="no_polisi" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>No.Polisi Lama</label>
                        <input class="form-control w-100" type="text" name="no_polisi_lama" required>
                    </div>
                    <div class="form-group">
                        <label>No.BPKB</label>
                        <input class="form-control w-100" type="text" name="no_bpkb" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>No.STNK</label>
                        <input class="form-control w-100" type="text" name="no_stnk" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>No.Rangka</label>
                        <input class="form-control w-100" type="text" name="no_rangka" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>No.mesin</label>
                        <input class="form-control w-100" type="text" name="no_mesin" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>Kode Lokasi</label>
                        <input class="form-control w-100" type="text" name="kode_lokasi" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>Merk Kendaraan</label>
                        <input class="form-control w-100" type="text" name="merk_kendaraan" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>Model Kendaraan</label>
                        <input class="form-control w-100" type="text" name="model_kendaraan" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>Tahun Buat</label>
                        <input class="form-control w-100" type="text" name="tahun_buat" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>Jumlah Roda</label>
                        <input class="form-control w-100" type="text" name="jumlah_roda" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>No.Pabean</label>
                        <input class="form-control w-100" type="text" name="no_pabean" required>
                    </div>
                    <div class="form-group mt-3">
                        <input class="btn btn-primary w-100" type="submit" name="daftar" value="Daftar">
                        <input type="hidden" name="id_wp" value="<?= $_POST['id_wp']; ?>">
                        <input type="hidden" name="no_ktp" value="<?= $_POST['no_ktp']; ?>">
                        <input type="hidden" name="nama_pemilik" value="<?= $_POST['nama_pemilik']; ?>">
                        <input type="hidden" name="alamat_pemilik" value="<?= $_POST['alamat_pemilik']; ?>">
                        <input type="hidden" name="pekerjaan" value="<?= $_POST['pekerjaan']; ?>">
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