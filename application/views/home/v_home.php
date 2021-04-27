<div class="container-fluid">
    <p><?php echo $this->session->flashdata('flash'); ?></p>

    <div class="row">
        <div class="col-md-12">
            <h3>Daftar Karyawan</h3>
            <?php if (empty($isi)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data karyawan tidak ditemukan.
                </div>
            <?php endif; ?>

            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>Home/tambah" class="btn btn-primary">Tambah
                        Data Karyawan</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">#</th>
                        <th scope="col">Nik</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Dept</th>
                        <th scope="col">Email</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($isi as $dt) : ?>
                        <tr>
                            <form action="<?= base_url() ?>Home/delete/<?= $dt['id'] ?>" method="post">
                                <th scope="row"><button type="submit" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger float-right tombol-hapus">hapus</button>
                                    <a href="<?= base_url(); ?>Home/edit/<?= $dt['id'] ?>" class="btn btn-success float-right">ubah</a>
                                    <a href="<?= base_url(); ?>Home/detail/<?= $dt['id'] ?>" class="btn btn-primary float-right">detail</a>
                                </th>
                            </form>
                            <td><?= $dt['nik']; ?></td>
                            <td><?= $dt['nama']; ?></td>
                            <td><?= $dt['dept']; ?></td>
                            <td><?= $dt['email']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- insert -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end insert -->
</div>