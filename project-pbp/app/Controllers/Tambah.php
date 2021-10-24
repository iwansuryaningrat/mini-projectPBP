<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;

class Tambah extends BaseController
{
    protected $barangModel;
    protected $kategoriModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function tambah()
    {
        $kategori = $this->kategoriModel->findAll();
        $data = [
            'title' => 'Form Tambah Barang | Sumber Jaya Furniture',
            'kategori' => $kategori
        ];

        return view('admin/form-add-barang', $data);
    }
    function tambahBarang()
	{
		// helper(['form','url']);

		// $error = $this->validate([
		// 	'isbn' => 'required|min_length[13]|max_length[13]',
		// 	'author' => 'required',
		// 	'title' => 'required',
		// 	'price' => 'required|numeric'
		// ]);

		// if(!$error)
		// {
		// 	echo view('add_book', [
		// 		'error' => $this->validator
		// 	]);
		// }
		// else
		// {

			$this->barangModel->insert([
				'nama' => $this->request->getVar('nama'),
				'idkategori' => $this->request->getVar('kategori'),
                'stok' => $this->request->getVar('stok'),
				'harga' => $this->request->getVar('harga'),
                'berat' => $this->request->getVar('berat'),
                'keterangan' => $this->request->getVar('keterangan')
				
			]);
            $data = [
                'nama' => $this->request->getVar('nama'),
				'kategori' => $this->request->getVar('kategori'),
                'stok' => $this->request->getVar('stok'),
				'harga' => $this->request->getVar('harga'),
                'berat' => $this->request->getVar('berat'),
                'keterangan' => $this->request->getVar('keterangan')
            ];
			// $session = \Config\Services::session();
			// $session->setFlashdata('success', 'Book Added');

            // session()->setFlashdata('pesan', 'Data barang berhasil ditambahkan.');
            // dd($data);
			return redirect()->to('/admin/barang');
		// }
	}

    
}
