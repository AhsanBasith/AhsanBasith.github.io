<?php
include 'config/koneksi.php';
$thisPage = "contact";
include 'includes/header.php';
?>

<!-- form data diri -->
<div class="container mx-auto mt-5">
    <div class="row justify-content-center ">
        <div class="col-lg-6">
            <div class="card p-4">
                <h5 class="text-center">Contact</h5>
                <form action="config/contact.php" method="POST">
                    <div class="form-group mt-4">
                        <label>Nama</label>
                        <input class="form-control w-100" type="text" name="nama" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>Email</label>
                        <input class="form-control w-100" type="text" name="email" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>Subject</label>
                        <input class="form-control w-100" type="text" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label>Pesan</label>
                        <textarea class="form-control w-100" name="pesan" rows="10" required></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input class="btn btn-primary w-100" type="submit" name="submit" value="Kirim">
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