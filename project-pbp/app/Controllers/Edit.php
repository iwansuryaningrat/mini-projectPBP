<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Edit extends BaseController
{
    protected $kategoriModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function barang()
    {
        $data = [
            'title' => 'Form Edit Barang | Sumber Jaya Furniture'
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

    public function transaksi()
    {
        $data = [
            'title' => 'Form Edit Transaksi | Sumber Jaya Furniture'
        ];

        return view('admin/edit/form-edit-transaksi', $data);
    }
    
    public function hapuskategori($id)
    {
        $this->kategoriModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/admin/barang');
    }

    public function hapusbarang($id)
    {
        $this->kagegoriModel->delete($id);

        session()->setFlashdata('pesan barang', 'Data berhasil dihapus.');

        return redirect()->to('/admin/barang');
    }
}
