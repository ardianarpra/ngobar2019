<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Daftar Buku</h2>
            <?= Flasher::flash(); ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data['isi'] as $dt) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $dt['nama']; ?></td>
                            <td>
                                <a href="<?= BASE_URL; ?>/buku/detail/<?= $dt['id']; ?>">
                                    <span class="btn btn-primary btn-sm">Detail</span>
                                </a>
                                <a href="<?= BASE_URL; ?>/buku/hapus/<?= $dt['id']; ?>">
                                    <span class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Hapus</span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>