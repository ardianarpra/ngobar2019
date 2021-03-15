<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Beranda';

        $this->view('layout/header', $data);
        $this->view('home/index', $data);
        $this->view('layout/footer', $data);
    }
}
