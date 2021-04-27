<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Data Karyawan
                </div>
                <br>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="hidden" name="id" value="<?= $isi['id']; ?>">
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $isi['nama']; ?>" autocomplete="off">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" value="<?= $isi['nik']; ?>" autocomplete="off">
                            <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="dept">Dept</label>
                            <input type="text" name="dept" class="form-control" id="dept" value="<?= $isi['dept']; ?>" autocomplete="off">
                            <small class="form-text text-danger"><?= form_error('dept'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $isi['email']; ?>" autocomplete="off">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Update Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>