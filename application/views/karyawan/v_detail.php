<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Karyawan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $isi['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $isi['email']; ?></h6>
                    <p class="card-text"><?= $isi['nik']; ?></p>
                    <p class="card-text"><?= $isi['dept']; ?></p>
                    <a href="<?= base_url(); ?>Home" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>