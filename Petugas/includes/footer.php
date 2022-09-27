<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Modal tambah data pemilik kendaraan -->
<div class="modal fade" id="tambahDatapemilik" tabindex="-1" role="dialog" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../config/tambah_pemilik.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_wp" class="form-control form-control-user" id="id_wp">
                    <div class="form-group">
                        <span>No.KTP</span>
                        <input type="text" name="no_ktp" class="form-control form-control-user" id="no_ktp" required>
                    </div>
                    <div class="form-group">
                        <span>Nama Pemilik</span>
                        <input type="text" name="nama_pemilik" class="form-control form-control-user" id="nama_pemilik" required>
                    </div>
                    <div class="form-group">
                        <span>Alamat</span>
                        <input type="text" name="alamat_pemilik" class="form-control form-control-user" id="alamat_pemilik" required>
                    </div>
                    <div class="form-group">
                        <span>Pekerjaan</span>
                        <input type="text" name="pekerjaan" class="form-control form-control-user" id="pekerjaan" required>
                    </div>
                    <hr>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="tambah" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal edit kwitansi -->
<div class="modal fade" id="editKwitansi" tabindex="-1" role="dialog" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../config/edit_kwitansi2.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_kwitansi" id="id_kwitansi">
                    <div class="form-group">
                        <span>ID Pemilik</span>
                        <input type="text" name="id_kendaraan" class="form-control form-control-user" id="id_kendaraan" required readonly>
                    </div>
                    <div class="form-group">
                        <span>ID Kendaraan</span>
                        <input type="text" name="id_kendaraan" class="form-control form-control-user" id="id_kendaraan" required readonly>
                    </div>
                    <div class="form-group">
                        <span>No.Kwitansi</span>
                        <input type="text" name="no_kwitansi" class="form-control form-control-user" id="no_kwitansi" required>
                    </div>
                    <div class="form-group">
                        <span>Tanggal Penetapan</span>
                        <input type="date" name="tanggal_penetapan" class="form-control form-control-user" id="tanggal_penetapan" required>
                    </div>
                    <div class="form-group">
                        <span>Petugas</span>
                        <input type="text" name="petugas_penetapan" class="form-control form-control-user" id="petugas_penetapan" required>
                    </div>
                    <div class="form-group">
                        <span>Tarif Biaya</span>
                        <input type="text" name="tarif_biaya" class="form-control form-control-user" id="tarif_biaya" required>
                    </div>
                    <div class="form-group">
                        <span>Denda</span>
                        <input type="text" name="denda" class="form-control form-control-user" id="denda" required>
                    </div>
                    <hr>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="edit" value="Edit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit data pemilik kendaraan -->
<div class="modal fade" id="editAdmin" tabindex="-1" role="dialog" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../config/edit_admin.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_admin" id="id_admin">
                    <div class="form-group">
                        <span>Nama</span>
                        <input type="text" name="nama" class="form-control form-control-user" id="nama" required>
                    </div>
                    <div class="form-group">
                        <span>Password</span>
                        <input type="text" name="password" class="form-control form-control-user" id="password" required>
                    </div>
                    <div class="form-group">
                        <span>Bagian</span>
                        <input type="text" name="bagian" class="form-control form-control-user" id="bagian" required>
                    </div>
                    <hr>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="edit" value="Edit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="../config/logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../assets/vendor/chart.js/Chart.min.js"></script>
<script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../assets/js/demo/chart-area-demo.js"></script>
<script src="../assets/js/demo/chart-pie-demo.js"></script>
<script src="../assets/js/demo/datatables-demo.js"></script>

<script>
    $(document).on("click", "#tombolEditPemilik", function() {
        let id = $(this).data('id');
        let ktp = $(this).data('ktp');
        let nama = $(this).data('nama');
        let alamat = $(this).data('alamat');
        let pekerjaan = $(this).data('pekerjaan');

        $(".modal-body #id_wp").val(id);
        $(".modal-body #no_ktp").val(ktp);
        $(".modal-body #nama_pemilik").val(nama);
        $(".modal-body #alamat_pemilik").val(alamat);
        $(".modal-body #pekerjaan").val(pekerjaan);
    });
</script>

<script>
    $(document).on("click", "#tombolEditKendaraan", function() {
        let idk = $(this).data('idk');
        let polisi = $(this).data('polisi');
        let polisilama = $(this).data('polisilama');
        let bpkb = $(this).data('bpkb');
        let stnk = $(this).data('stnk');
        let rangka = $(this).data('rangka');
        let mesin = $(this).data('mesin');
        let pabean = $(this).data('pabean');
        let lokasi = $(this).data('lokasi');
        let kendaraan = $(this).data('kendaraan');
        let model = $(this).data('model');
        let tahun = $(this).data('tahun');
        let jumlah = $(this).data('jumlah');

        $(".modal-body #id_kendaraan").val(idk);
        $(".modal-body #no_polisi").val(polisi);
        $(".modal-body #no_polisi_lama").val(polisilama);
        $(".modal-body #no_bpkb").val(bpkb);
        $(".modal-body #no_stnk").val(stnk);
        $(".modal-body #no_rangka").val(rangka);
        $(".modal-body #no_mesin").val(mesin);
        $(".modal-body #no_pabean").val(pabean);
        $(".modal-body #kode_lokasi").val(lokasi);
        $(".modal-body #merk_kendaraan").val(kendaraan);
        $(".modal-body #model_kendaraan").val(model);
        $(".modal-body #tahun_buat").val(tahun);
        $(".modal-body #jumlah_roda").val(jumlah);
    });
</script>

<script>
    $(document).on("click", "#tombolEditKwitansi", function() {
        let idkw = $(this).data('idkw');
        let idwp = $(this).data('idwp');
        let idken = $(this).data('idken');
        let kwitansi = $(this).data('kwitansi');
        let tgldaftar = $(this).data('tgldaftar');
        let tglpntpn = $(this).data('tglpntpn');
        let petugas = $(this).data('petugas');
        let tarif = $(this).data('tarif');
        let denda = $(this).data('denda');
        let keterangan = $(this).data('keterangan');

        $(".modal-body #id_kwitansi").val(idkw);
        $(".modal-body #id_pemilik").val(idwp);
        $(".modal-body #id_kendaraan").val(idken);
        $(".modal-body #no_kwitansi").val(kwitansi);
        $(".modal-body #petugas_penetapan").val(tgldaftar);
        $(".modal-body #tanggal_penetapan").val(tglpntpn);
        $(".modal-body #petugas_penetapan").val(petugas);
        $(".modal-body #tarif_biaya").val(tarif);
        $(".modal-body #denda").val(denda);
        $(".modal-body #keterangan_lunas").val(keterangan);
    });
</script>

<script>
    $(document).on("click", "#tombolEditAdmin", function() {
        let id = $(this).data('id');
        let nama = $(this).data('nama');
        let password = $(this).data('password');
        let bagian = $(this).data('bagian');

        $(".modal-body #id_admin").val(id);
        $(".modal-body #nama").val(nama);
        $(".modal-body #password").val(password);
        $(".modal-body #bagian").val(bagian);
    });
</script>

<!-- <script>
    $(document).ready(function(){
        $(".list-data").load("kwitansi.php");
    })
</script> -->

</body>

</html>