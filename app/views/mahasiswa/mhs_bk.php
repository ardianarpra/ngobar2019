<div class="container mt-2">
    <h3>Daftar Mahasiswa</h3>
    <div class="row">
        <div class="col">
            <?php foreach ($data['isi'] as $dt) : ?>
                <ul class="list-group">
                    <li class="list-group-item"><?= $dt['nama']; ?></li>
                </ul>
            <?php endforeach ?>
        </div>
    </div>
</div>