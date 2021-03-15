<?php
class Dosen extends Controller
{
    public function index()
    {
        $data['title'] = 'Data | Dosen';

        $this->view('layout/header', $data);
        $this->view('dosen/index', $data);
        $this->view('layout/footer', $data);
    }
}
