<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;

class Admin extends BaseController
{
    protected $kategoriModel;
    protected $barangModel;
    protected $penjualanModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->barangModel = new BarangModel();
        $this->penjualanModel = new PenjualanModel();
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
        $query = $this->barangModel->getBarang();
        $kategori = $this->kategoriModel->findAll();
        $barang = $query->getResultArray();
        $i = 1;
        $j = 1;

        
        $data = [
            'title' => 'Data Barang | Sumber Jaya Furniture',
            'i' => $i,
            'j' => $j,
            'kategori' => $kategori,
            'barang' => $barang
        ];

        return view('admin/data_barang', $data);
    }

    public function transaksi()
    {
        $query = $this->penjualanModel->getTransaksi();
        $transaksi = $query->getResultArray();
        
        $data = [
            'title' => 'Data Transaksi | Sumber Jaya Furniture',
            'transaksi' => $transaksi
        ];


        return view('admin/data_transaksi', $data);
    }

    public function detail()
    {
        $query = $this->barangModel->getBarang();
        $data = [
            'title' => 'Detail Barang | Sumber Jaya Furniture'
        ];

        return view('admin/detail-barang', $data);
    }
    
    public function laporan()
    {
        $data = [
            'title' => 'Detail Barang | Sumber Jaya Furniture'
        ];

        return view('admin/laporan-bulanan', $data);
    }
}
