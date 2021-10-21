<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Admin extends BaseController
{
    protected $kategoriModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard | Sumber Jaya Furniture'
        ];

        return view('admin/index', $data);
    }

    public function barang()
    {
        $kategori = $this->kategoriModel->findAll();
        $i = 1;
        $data = [
            'title' => 'Data Barang | Sumber Jaya Furniture',
            'i' => $i,
            'kategori' => $kategori
        ];

        return view('admin/data_barang', $data);
    }

    public function transaksi()
    {
        $data = [
            'title' => 'Data Transaksi | Sumber Jaya Furniture'
        ];

        return view('admin/data_transaksi', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail Barang | Sumber Jaya Furniture'
        ];

        return view('admin/detail-barang', $data);
    }
}
