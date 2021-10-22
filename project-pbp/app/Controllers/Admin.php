<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\BarangModel;
use App\Models\DataTransaksiModel;


class Admin extends BaseController
{
    protected $kategoriModel;
    protected $barangModel;
    protected $transaksiModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->barangModel = new BarangModel();
        $this->transaksiModel = new DataTransaksiModel();
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
        $dataTransaksi = $this->kategoriModel->findAll();
        $i = 1;
        $data = [
            'title' => 'Data Transaksi | Sumber Jaya Furniture',
            'i' => $i,
            'dataTransaksi' => $dataTransaksi,
            
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
