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

    public function confirmhapuskategori($idkategori)
    {

    }
    
    public function hapuskategori($idkategori)
    {
        $this->kategoriModel->delete($idkategori);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/admin/barang');
    }

    public function editkategori($idkategori)
    {
        $this->kategoriModel->update([
            'idkategori' => $idkategori,
            'nama' => $this->request->getVar('namaKategori')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin/barang');
    }

    public function delete($idbarang)
    {
        // $idbarang = $this->input->get('user');

        // $this->db->where('idbarang',$idbarang);
        $this->delete('barang');
        $this->KagegoriModel->delete($idbarang);

        session()->setFlashdata('pesan barang', 'Data berhasil dihapus.');

        return redirect()->to('/admin/barang');
        // $barangModel = new BarangkModel();

        // $barangModel->where('idbarang', $idbarang)->hapusbarang($idbarang);

        // $session = \Config\Services::session();

        // $session->setFlashdata('success', 'Book is Deleted');

        // return $this->response->redirect(site_url('/admin'));
    }

    
}
