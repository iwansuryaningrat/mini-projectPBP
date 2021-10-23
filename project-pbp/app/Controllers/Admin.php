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

        // dd($barang);
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
        $db = \Config\Database::connect();
        $query = $db->query("SELECT penjualan.idpenjualan AS 'idpenjualan', penjualan.tgl_penjualan AS 'tgl_penjualan', barang.nama AS 'nama_barang', pelanggan.nama AS 'nama_pembeli', penjualan.total_item AS jumlah, penjualan.total_harga AS 'harga_total', status.nama AS 'status' FROM (((((penjualan JOIN detail_penjualan ON penjualan.idpenjualan = detail_penjualan.idpenjualan) JOIN barang ON detail_penjualan.idbarang = barang.idbarang) JOIN pelanggan ON penjualan.idpelanggan = pelanggan.idpelanggan) JOIN status_penjualan ON penjualan.idpenjualan = status_penjualan.idpenjualan) JOIN status ON status_penjualan.idstatus = status.idstatus) ORDER BY penjualan.idpenjualan;");
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
        // $query->where();
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
