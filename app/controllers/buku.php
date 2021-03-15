<?php
class Buku extends Controller
{
    public function index()
    {
        $data['title'] = 'Data | Buku';
        $data['isi'] = $this->model('Buku_model')->getAll();
        $this->view('layout/header', $data);
        $this->view('buku/index', $data);
        $this->view('layout/footer', $data);
    }
    public function detail($id)
    {
        $data['title'] = 'Detail | Buku';
        $data['isi'] = $this->model("Buku_model")->get($id);
        $this->view('layout/header', $data);
        $this->view('buku/detail', $data);
        $this->view('layout/footer');
    }
    public function hapus($id)
    {
        if ($this->model("Buku_model")->hapusData($id) > 0) {
            Flasher::setFlash("Berhasil", "Dihapus", 'success');
            header('Location:' . BASE_URL . '/buku');
            exit;
        }
    }
}
