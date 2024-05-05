<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="h3 mb-4 text-gray-800">Riwayat Periksa</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Tgl. Periksa</th>
                        <th scope="col">Keluhan</th>
                        <th scope="col">Diagnosa</th>
                        <th scope="col">Penatalaksanaan</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>