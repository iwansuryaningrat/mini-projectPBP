<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;
use App\Models\RekapPenjualanModel;

use function PHPUnit\Framework\throwException;

class Admin extends BaseController
{
    protected $kategoriModel;
    protected $barangModel;
    protected $penjualanModel;
    protected $RekapPenjualanModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->barangModel = new BarangModel();
        $this->penjualanModel = new PenjualanModel();
        $this->RekapPenjualanModel = new RekapPenjualanModel();
    }

    public function index()
    {


        $index = $this->RekapPenjualanModel->findAll();
        // $index = $query->getResultArray();
        // $index = $this->RekapPenjualanModel->findAll();
        $total_terjual = $this->RekapPenjualanModel->getTotalPenjualan();
        $total = $total_terjual->getResultArray();
        
        // total pembeli
        $total_pembelian = $this->RekapPenjualanModel->getPenjualan();
        $pembeli = $total_pembelian->getResultArray();

        //total pendapatan
        $total_pendapatan = $this->RekapPenjualanModel->getTotalPendapatan();
        $pendapatan = $total_pendapatan->getResultArray();
        
        //terlaris
        $barangTerlaris = $this->RekapPenjualanModel->getTerlaris();
        $terlaris = $barangTerlaris->getResultArray();

        //bulanan
        $bulanan = $this->RekapPenjualanModel->getBulanan();
        $bulan = $bulanan->getResultArray();

        $data = [
            'title' => 'Admin Dashboard | Sumber Jaya Furniture',
            'index' => $index,
            'total' => $total,
            'pembeli' => $pembeli,
            'pendapatan' => $pendapatan,
            'terlaris' => $terlaris,
            'bulan' => $bulan
        ];
        // echo '<pre>';
        // print_r($total_terjual);
        // dd($terlaris);
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

        //jika barang tidak ada di table
        if(empty($data['barang']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data barang tidak ditemukan');
        }
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
    
    public function laporan($bln)
    {
        $query = $this->RekapPenjualanModel->getRekap($bln);
        $rekap = $query->getResultArray();
        $i = 1;
        $data = [
            'title' => 'Detail Barang | Sumber Jaya Furniture',
            'i' => $i,
            'rekap' => $rekap
        ];
        // dd($rekap);
        return view('admin/laporan-bulanan', $data);
    }
}
