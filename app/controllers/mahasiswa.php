<?php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Data | Mahasiswa';
        $data['isi'] = $this->model('Mahasiswa_model')->getAll();
        $this->view('layout/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('layout/footer', $data);
    }
    public function detail($id)
    {
        $data['title'] = 'Detail | Mahasiswa';
        $data['isi'] = $this->model('Mahasiswa_model')->get($id);
        $this->view('layout/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('layout/footer', $data);
    }
    public function tambah()
    {
        $data['nama'] = $_POST['tbhNama'];
        $data['alamat'] = $_POST['tbhAlamat'];
        $data['jurusan'] = $_POST['tbhJurusan'];
        if ($this->model('Mahasiswa_model')->tambahData($data) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location:' . BASE_URL . '/mahasiswa');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model("Mahasiswa_model")->hapusData($id) > 0) {
            header("Location: " . BASE_URL . '/mahasiswa');
            exit;
        }
    }
    public function getEdit($id)
    {
        $val = $this->model('Mahasiswa_model')->get($id);
        $data = [
            'title' => "Edit Data",
            "id" => $val['id'],
            'nama' => $val['nama'],
            'alamat' => $val['alamat'],
            'jurusan' => $val['jurusan']
        ];
        $this->view('layout/header', $data);
        $this->view('mahasiswa/editMahasiswa', $data);
        $this->view('layout/footer', $data);
    }
    public function saveEdit()
    {
        $data['id'] = $_POST['id'];
        $data['nama'] = $_POST['tbhNama'];
        $data['alamat'] = $_POST['tbhAlamat'];
        $data['jurusan'] = $_POST['tbhJurusan'];
        // var_dump($data);
        if ($this->model("Mahasiswa_model")->editData($data) > 0) {
            Flasher::setFlash('Berhasil', 'Diupdate', 'success');
            header("Location: " . BASE_URL . '/mahasiswa');
            exit;
        }
    }
}
