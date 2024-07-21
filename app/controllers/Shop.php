<?php

class Shop extends Controller
{

    public function index()
    {
        $data['judul'] = 'Shop';
        $produkModel = $this->model('Produk_model');
        $products = $produkModel->getAllProduk();
        $this->view('templates/header', $data);
        $this->view('shop/index', ['products' => $products]);
        $this->view('templates/footer');
    }

    public function detail()
    {
        $data['judul'] = 'Detail Produk';
        $this->view('templates/header', $data);
        $this->view('shop/detail');
        $this->view('templates/footer');
    }

    public function checkout()
    {
        $data['judul'] = 'Checkout';
        $this->view('templates/header', $data);
        $this->view('shop/checkout');
        $this->view('templates/footer');
    }

    public function cart()
    {
        $data['judul'] = 'Keranjang Belanja';
        $this->view('templates/header', $data);
        $this->view('shop/cart');
        $this->view('templates/footer');
    }
}
