<div class="container mt-2">
    <h3>Daftar Mahasiswa</h3>
    <?php Flasher::flash() ?>
    <!-- Button trigger modal -->
    <button type="button" id="tampilModalTambah" class="btn btn-primary mb-2" data-toggle="modal" data-target="#formTambahData">
        Tambah Data
    </button>

    <div class="row">
        <div class="col">
            <?php foreach ($data['isi'] as $dt) : ?>
                <ul class="list-group">
                    <li class="list-group-item"><?= $dt['nama']; ?>
                        <!-- <a href="" class="btn btn-success float-right btn-sm">Detail</a> -->
                        <a onclick="return confirm('Apakah Anda Yakin?')" class="badge badge-danger float-right ml-1" href="<?= BASE_URL; ?>/mahasiswa/hapus/<?= $dt['id']; ?>">
                            Hapus
                        </a>

                        <a href="<?= BASE_URL; ?>/mahasiswa/getedit/<?= $dt['id']; ?>" class="badge badge-primary float-right ml-1" id="tampilModalUbah" data-id="<?= $dt['id']; ?>">
                            Ubah
                        </a>

                        <a class="badge badge-info float-right ml-1" href="<?= BASE_URL; ?>/mahasiswa/detail/<?= $dt['id']; ?>">
                            Detail
                        </a>
                    </li>

                </ul>
            <?php endforeach ?>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formTambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/mahasiswa/tambah" method="POST">
                    <div class="form-group">
                        <label for="tbhNama">Nama</label>
                        <input type="text" class="form-control" id="tbhNama" name="tbhNama" aria-describedby="emailHelp">

                    </div>
                    <div class="form-group">
                        <label for="tbhAlamat">Alamat</label>
                        <input type="text" class="form-control" id="tbhAlamat" name="tbhAlamat" aria-describedby="emailHelp">

                    </div>
                    <div class="form-group">
                        <label for="tbhJurusan">Jurusan</label>
                        <select class="form-control" id="tbhJurusan" name="tbhJurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Akuntan">Teknik Akuntan</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>