<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Pasien</h2>
            <form action="<?= ('/DataPasien/save') ?>" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="usia_pasien" class="col-sm-2 col-form-label">Usia Pasien</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="usia_pasien" name="usia_pasien">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tb_bb_pasien" class="col-sm-2 col-form-label">TB/BB Pasien</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tb_bb_pasien" name="tb_bb_pasien">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>