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

    // public function ShowEditBarang($idbarang)
    // {
    //     $query = $this->barangModel->getBarang();
    //     // $barang = $query->getResultArray();
    //     // $i = 1;
    //     $barang = $query->WHERE(['idbarang' => $idbarang])->first();
    //     // echo $idbarang; 

    //     dd($barang);
    //     // $data = [
    //     //     'title' => 'Form Data Barang | Sumber Jaya Furniture',
    //     //     'i' => $i,
    //     //     'barang' => $barang
            
    //     // ];

    //     // return view('admin/edit/data_barang', $data);
    // }

    public function ShowDeleteBarang()
    {
        $query = $this->barangModel->getBarang();
        $barang = $query->getResultArray();
        $i = 1;

        $data = [
            'title' => 'Form Data Barang | Sumber Jaya Furniture',
            'i' => $i,
            // 'j' => $j,
            // 'kategori' => $kategori,
            'barang' => $barang
            
        ];

        return view('admin/delete/form-data-barang', $data);
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
