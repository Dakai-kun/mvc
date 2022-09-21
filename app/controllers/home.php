<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $data['gambar'] = 'shaq5.jpg';
        $data['nama'] = 'Shaq';
        $data['pekerjaan'] = 'Profesional Basketball Player';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    } 
}
