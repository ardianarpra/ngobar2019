<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['isi']['nama']; ?></h5>
                    <p class="card-text"><?= $data['isi']['penerbit']; ?>.</p>
                    <p class="card-text"><?= $data['isi']['thn_terbit']; ?>.</p>
                    <a href="<?= BASE_URL; ?>/buku" class="">Kembali Ke Awal</a>

                </div>
            </div>
        </div>
    </div>
</div>