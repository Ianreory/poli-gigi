<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <!-- <a href="<?= base_url('datapasien'); ?>"></a> -->
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Edit Data Pasien</h2>
            <form action="<?= base_url('/datapasien/update') ?>" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $data_pasien->nik ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= $data_pasien->nama_pasien ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="usia_pasien" class="col-sm-2 col-form-label">Usia Pasien</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="usia_pasien" name="usia_pasien" value="<?= $data_pasien->usia_pasien ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tb_bb_pasien" class="col-sm-2 col-form-label">TB/BB Pasien</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tb_bb_pasien" name="tb_bb_pasien" value="<?= $data_pasien->tb_bb_pasien ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $data_pasien->jenis_kelamin ?>">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>