<?php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Contact Us';

        $this->view('layout/header', $data);
        $this->view('kontak/index', $data);
        $this->view('layout/footer', $data);
    }
}
