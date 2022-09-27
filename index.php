<?php
$thisPage = "index";
include 'includes/header.php';
?>

<div class="container mt-4">
    <!-- membuat jumbotron -->
    <div class="jumbotron bg-white shadow">
        <center>
            <img src="assets/img/logo.png" alt="5" style="width:250px">
            <h2>Selamat datang di website pajak kendaraan</h2>
            <p>Website untuk mendaftarkan pajak kendaraan serta untuk mengecek pajak kendaraan.</p><br /><br />
            <a class="btn btn-primary shadow" href="daftar" role="button">Daftar</a>
            <a class="btn btn-success shadow" href="data-pajak" role="button">Data Pajak</a>
        </center>
    </div>
    <!-- akhir jumbotron -->
</div>

<div class="container mt-5 bg-white shadow">
    <div class="judul-kategori bg-white text-center" style="padding:10px 10px">
        <h5 style="margin-top: 5px; font-weight:Bold;">Pajak Kendaraan</h5>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="assets/img/cara pajak.jpg" class="card-img-top" alt="..." width="300" height="200">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="assets/img/pajak.jpeg" class="card-img-top" alt="..." width="300" height="200">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="assets/img/pajak2.jpg" class="card-img-top" alt="..." width="300" height="200">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>