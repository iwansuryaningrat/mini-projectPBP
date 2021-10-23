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

        $data = [
            'title' => 'Form Edit Barang | Sumber Jaya Furniture',
            'barang' => $barang,
            'kategori' => $kategori
            
        ];

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

    public function transaksi()
    {
        $data = [
            'title' => 'Form Edit Transaksi | Sumber Jaya Furniture'
        ];

        return view('admin/edit/form-edit-transaksi', $data);
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

    public function hapusbarang($idbarang)
    {
        
        $this->barangiModel->delete($idbarang);

        session()->setFlashdata('pesan barang', 'Data berhasil dihapus.');

        return redirect()->to('/admin/barang');
    }

    public function editbarang($idbarang)
    {
        
        

        session()->setFlashdata('pesan barang', 'Data berhasil dihapus.');

        return redirect()->to('/admin/barang');
    }

    
}
