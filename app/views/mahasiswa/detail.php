<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['isi']['nama']; ?></h5>
                    <p class="card-text"><?= $data['isi']['alamat']; ?>.</p>
                    <p class="card-text"><?= $data['isi']['jurusan']; ?>.</p>
                    <a href="<?= BASE_URL; ?>/mahasiswa" class="">Kembali Ke Awal</a>

                </div>
            </div>
        </div>
    </div>
</div>