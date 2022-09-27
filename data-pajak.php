<?php
include 'config/koneksi.php';
include 'includes/header.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card mb-5 mt-5 shadow ">
        <div class="card-header py-3">
            <h1 class="h3 text-gray-800">Data Pajak Kendaraan</h1>
            <p style="float: left;font-size: 11px;color: red;">*jika data kwitansi kosong harap tunggu 1x24jam, jika masih kosong hubungi <a href="contact">kami</a>.</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Pemilik</th>
                            <th>Merk Kendaraan</th>
                            <th>Model Kendaraan</th>
                            <th>No.Polisi</th>
                            <th>Tanggal Daftar</th>
                            <th>Kode Lokasi</th>
                            <th>Tanggal_penetapan</th>
                            <th>Petugas_penetapan</th>
                            <th>Tarif Biaya</th>
                            <th>Denda</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT kendaraan.*, kwitansi.*, pemilik_kendaraan.* FROM kwitansi 
                              LEFT JOIN kendaraan ON kendaraan.id_kendaraan = kwitansi.id_kendaraan
                              LEFT JOIN pemilik_kendaraan ON pemilik_kendaraan.id_wp = kwitansi.id_wp";
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
                                <td><?php echo $row['merk_kendaraan']; ?></td>
                                <td><?php echo $row['model_kendaraan']; ?></td>
                                <td><?php echo $row['no_polisi']; ?></td>
                                <td><?php echo $row['tanggal_daftar']; ?></td>
                                <td><?php echo $row['kode_lokasi']; ?></td>
                                <td><?php echo $row['tanggal_penetapan']; ?></td>
                                <td><?php echo $row['petugas_penetapan']; ?></td>
                                <td><?php echo $row['tarif_biaya']; ?></td>
                                <td><?php echo $row['denda']; ?></td>
                                <td><?php echo $row['keterangan_lunas']; ?></td>
                                <td>
                                    <a href="report/cetak_kwitansi.php?id_kwitansi=<?= $row['id_kwitansi'] ?>" target="_blank" class="btn btn-success btn-sm mb-1 text-center"><i class="fas fa-copy"><span class="ms-1">Cetak</span></i></a>
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

<!-- footer -->
<footer class=" bg-dark p-3">
    <div class="container">
        <div class="text-center text-center p-2">
            <span class="ps-5 text-white">Copyright
                <i class="far fa-copyright"></i>@2021
            </span>
        </div>
    </div>
    </div>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
</body>

</html>