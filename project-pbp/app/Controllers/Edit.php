<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;

class Edit extends BaseController
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

    public function barang($idbarang)
    {
        $query = $this->barangModel->getBarangid($idbarang);
        $barang = $query->getResultArray();
        $kategori = $this->kategoriModel->findAll();

        // dd($barang);

        $data = [
            'title' => 'Form Edit Barang | Sumber Jaya Furniture',
            'barang' => $barang,
            'kategori' => $kategori
            
        ];

        // dd($data);

        return view('admin/edit/form-edit-barang', $data);
    }

    

    public function kategori($idkategori)
    {
        $datakategori = $this->kategoriModel->getKategori($idkategori);
        $data = [
            'title' => 'Form Edit Kategori | Sumber Jaya Furniture',
            'data' => $datakategori
        ];

        return view('admin/edit/form-edit-kategori', $data);
    }

    public function detailhapuskategori($idkategori)
    {
        $datakategori = $this->kategoriModel->getKategori($idkategori);
        $data = [
            'title' => 'Hapus Kategori | Sumber Jaya Furniture',
            'data' => $datakategori
        ];

        return view('admin/delete/form-delete-kategori', $data);
    }

    
    public function hapuskategori($idkategori)
    {
        $this->kategoriModel->delete($idkategori);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/admin/barang');
    }

    public function editkategori($idkategori)
    {
        $data = [
            'idkategori' => $idkategori,
            'nama' => $this->request->getVar('namaKategori')
        ];
        $this->kategoriModel->update($idkategori, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin/barang');
    }

    public function detailhapusbarang($idbarang)
    {
        $databarang = $this->barangModel->getBarangid($idbarang);
        // $barang = $databarang->getResultArray();
        $data = [
            'title' => 'Delete Barang | Sumber Jaya Furniture',
            'barang' => $databarang
        ];

        return view('admin/delete/form-delete-barang', $data);
    }
    
    public function hapusbarang($idbarang)
    {
        
        $this->barangModel->delete($idbarang);

        session()->setFlashdata('pesan barang', 'Data berhasil dihapus.');

        return redirect()->to('/admin/barang');
    }

    

    public function editbarang($idbarang)
    {
        $data = [
            'idbarang' => $idbarang,
            'nama' => $this->request->getPost('nama'),
            'idkategori' => $this->request->getPost('idkategori'),
            'stok' => $this->request->getPost('stok'),
            'harga' => $this->request->getPost('harga'),
            'berat' => $this->request->getPost('berat'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];
        
        // dd($data);

        $this->barangModel->update($idbarang, $data);

        session()->setFlashdata('pesan barang', 'Data berhasil diubah.');

        return redirect()->to('/admin/barang');
    }

    public function transaksi()
    {
        $dataTransaksi = $this->penjualanModel->getTransaksi();
        $data = [
            'title' => 'Form Edit Transaksi | Sumber Jaya Furniture',
            'data' => $dataTransaksi
        ];

        return view('admin/edit/form-edit-transaksi', $data);
    }

    public function edittransaksi($idpenjualan)
    {
        $dataTransaksi = $this->penjualanModel->getDataTransaksi($idpenjualan);
        $data = [
            'title' => 'Form Edit Transaksi | Sumber Jaya Furniture',
            'data' => $dataTransaksi
        ];

        return view('admin/edit/form-edit-transaksi', $data);
    }
}
