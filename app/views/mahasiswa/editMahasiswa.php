<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASE_URL; ?>/mahasiswa/saveEdit" method="POST">
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <div class="form-group">
                                <label for="tbhNama">Nama</label>
                                <input type="text" class="form-control" value="<?= $data['nama']; ?>" id="tbhNama" name="tbhNama" aria-describedby="emailHelp">

                            </div>
                            <div class="form-group">
                                <label for="tbhAlamat">Alamat</label>
                                <input type="text" value="<?= $data['alamat']; ?>" class="form-control" id="tbhAlamat" name="tbhAlamat" aria-describedby="emailHelp">

                            </div>
                            <div class="form-group">
                                <label for="tbhJurusan">Jurusan</label>
                                <select class="form-control" id="tbhJurusan" name="tbhJurusan">
                                    <option selected value="<?= $data['jurusan']; ?>"><?= $data['jurusan']; ?></option>
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
    </div>
</div>