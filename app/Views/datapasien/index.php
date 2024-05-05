<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="h3 mb-4 text-gray-800">Daftar Pasien</h1>
            <a href="<?= base_url('datapasien/create') ?>" class="btn btn-primary mb-3">Tambah Data Pasien</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Usia Pasien</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($all_data_datapasien as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $d->nama_pasien ?></td>
                            <td><?= $d->usia_pasien ?></td>
                            <td><?= $d->jenis_kelamin ?></td>
                            <td>
                                <a href="<?= base_url('datapasien/detail/') . '/' . $d->nik ?>" class="btn btn-success">Detail</a>
                                <a href="<?= base_url('datapasien/edit/') . '/' . $d->nik ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('datapasien/delete/') . '/' . $d->nik ?>" " class=" btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>