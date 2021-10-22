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
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, kategori.nama AS kategori, barang.harga, barang.stok FROM `barang` JOIN kategori WHERE barang.idkategori = kategori.idkategori");
        // $result = $query->getResult();
        // // $builder->select('barang.nama, kategori.nama, barang.harga, barang.stok');
        // // $builder->join('kategori', 'barang.idkategori = kategori.idkategori');
        // // $barang = $builder->get();
        // foreach($query->getResultArray() as $row)
        // {
        //     d($row);
        // }
        
        

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
        // echo"<pre>";
        // print_r($result);
        // foreach($result as $result)
        // {
        //     $barang = (array)$result;
        // }
        
        // foreach($query->getResultArray() as $row)
        // {
        //     d($row);
        // }
        // dd($barang);

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
