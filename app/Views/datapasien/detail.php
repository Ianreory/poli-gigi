<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Pasien</h1>
    <div class="row">
        <div class="col-lg-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title"><b>Nama Pasien: <?= $all_data_datapasien->nama_pasien ?></b></h6>
                            <p class="card-text">NIK: <?= $all_data_datapasien->nik  ?></p>
                            <p class="card-text">Usia Pasien: <?= $all_data_datapasien->usia_pasien ?></p>
                            <p class="card-text">TB/BB Pasien: <?= $all_data_datapasien->tb_bb_pasien ?></p>
                            <p class="card-text">Jenis Kelamin: <?= $all_data_datapasien->jenis_kelamin  ?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                            <small><a href="<?= base_url('datapasien/index') ?>">&laquo; back to data pasien</a></small>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>