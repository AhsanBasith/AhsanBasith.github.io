<?php
include 'config/koneksi.php';
include 'includes/header.php';
?>
<!doctype html>
<html lang="en">

<!-- Card -->
<div class="container mx-auto mt-5" style="align-items: center;">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card p-5" style="height:600px;">
                <?php
                if (isset($_POST['daftar'])) {
                    $no_polisi = $_POST['no_polisi'];
                    $no_polisi_lama = $_POST['no_polisi_lama'];
                    $no_bpkb = $_POST['no_bpkb'];
                    $no_stnk = $_POST['no_stnk'];
                    $no_rangka = $_POST['no_rangka'];
                    $no_mesin = $_POST['no_mesin'];
                    $no_pabean = $_POST['no_pabean'];
                    $kode_lokasi = $_POST['kode_lokasi'];
                    $merk_kendaraan = $_POST['merk_kendaraan'];
                    $model_kendaraan = $_POST['model_kendaraan'];
                    $tahun_buat = $_POST['tahun_buat'];
                    $jumlah_roda = $_POST['jumlah_roda'];
                    $query1 = "INSERT into kendaraan (no_polisi, no_polisi_lama, no_bpkb,no_stnk,no_rangka,no_mesin,no_pabean,
                                                              kode_lokasi,merk_kendaraan,model_kendaraan,tahun_buat,jumlah_roda) 
                                       values ('$no_polisi','$no_polisi_lama','$no_bpkb','$no_stnk','$no_rangka','$no_mesin','$no_pabean',
                                       '$kode_lokasi','$merk_kendaraan','$model_kendaraan','$tahun_buat','$jumlah_roda')";
                    $result = mysqli_query($koneksi, $query1);

                    if ($result) {
                        $query2 = "SELECT id_kendaraan from kendaraan order by id_kendaraan DESC";
                        $result2 = mysqli_query($koneksi, $query2);
                        $res_kend = mysqli_fetch_assoc($result2);

                        $kendaraan_id = $res_kend['id_kendaraan'];

                        $id_wp = $_POST['id_wp'];
                        $no_ktp = $_POST['no_ktp'];
                        $nama_pemilik = $_POST['nama_pemilik'];
                        $alamat_pemilik = $_POST['alamat_pemilik'];
                        $pekerjaan = $_POST['pekerjaan'];
                        $query3 = "INSERT into pemilik_kendaraan (id_wp, id_kendaraan, no_ktp,nama_pemilik,alamat_pemilik,pekerjaan) 
                                       values ('$id_wp','$kendaraan_id','$no_ktp','$nama_pemilik','$alamat_pemilik','$pekerjaan')";
                        $result3 = mysqli_query($koneksi, $query3);

                        if ($result3) {
                            $query4 = "SELECT id_wp from pemilik_kendaraan order by id_wp DESC";
                            $result4 = mysqli_query($koneksi, $query4);
                            $res_pkend = mysqli_fetch_assoc($result4);

                            $wp_id = $res_pkend['id_wp'];

                            $query5 = "SELECT nama_pemilik from pemilik_kendaraan order by id_wp DESC";
                            $result5 = mysqli_query($koneksi, $query5);
                            $res_nama = mysqli_fetch_assoc($result5);

                            $nama = $res_nama['nama_pemilik'];

                            $query5 = "INSERT into kwitansi(id_wp,id_kendaraan,nama) values ('$wp_id','$kendaraan_id','$nama')";
                            $result5 = mysqli_query($koneksi, $query5);
                ?>
                <?php
                        }
                    }
                }
                ?>
                <h3 class="text-center">Terimakasih , telah melakukan pendataran mohon tunggu informasi lebih lanjut.</h3>
                <a href=" data-pajak.php" class="btn btn-secondary mt-3" style="text-decoration: none;">Cek data pajak kendaraan</a>
                <a href=" index.php" class="btn btn-primary mt-1" style="text-decoration: none;">Back To Home</a>
            </div>
        </div>
    </div>

</div>
</div>

<?php
include 'includes/footer.php';
?>