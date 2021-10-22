<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\BarangModel;

class Admin extends BaseController
{
    protected $kategoriModel;
    protected $barangModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->barangModel = new BarangModel();
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
        // $db = \Config\Database::connect();
        // $databarang = $db->query("SELECT barang.nama, kategori.nama AS namaKategori, barang.harga, barang.stok FROM `barang`
        // JOIN kategori
        // WHERE barang.idkategori = kategori.idkategori");
        // // $builder->select('barang.nama, kategori.nama, barang.harga, barang.stok');
        // // $builder->join('kategori', 'barang.idkategori = kategori.idkategori');
        // // $barang = $builder->get();


        $kategori = $this->kategoriModel->findAll();
        $barang = $this->barangModel->findAll();
        $i = 1;
        $j = 1;
        $data = [
            'title' => 'Data Barang | Sumber Jaya Furniture',
            'i' => $i,
            'j' => $j,
            'kategori' => $kategori,
            'barang' => $barang
            
        ];
        // dd($databarang);
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
