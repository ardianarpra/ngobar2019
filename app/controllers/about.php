<?php
class About extends Controller
{
    public function index()
    {
        $data['title'] = "About";
        $this->view('layout/header', $data);
        $this->view('about/index');
        $this->view('layout/footer');
    }
}
