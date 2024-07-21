<?php

class Admin extends Controller
{

    public function index()
    {
        $data['judul'] = 'Admin';
        $this->view('templates/header_admin', $data);
        $this->view('admin/index');
        $this->view('templates/footer_admin');
    }

    public function produk()
    {
        $data['judul'] = 'Produk';
        $this->view('templates/header_admin', $data);
        $this->view('admin/produk');
        $this->view('templates/footer_admin');
    }

    public function pelanggan()
    {
        $data['judul'] = 'Pelanggan';
        $this->view('templates/header_admin', $data);
        $this->view('admin/pelanggan');
        $this->view('templates/footer_admin');
    }

    public function invoice()
    {
        $data['judul'] = 'Invoice';
        $this->view('templates/header_admin', $data);
        $this->view('admin/invoice');
        $this->view('templates/footer_admin');
    }
}
