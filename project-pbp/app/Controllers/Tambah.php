<?php

namespace App\Controllers;

class Tambah extends BaseController
{
    public function tambahBarang()
    {
        $data = [
            'title' => 'Admin Dashboard | Sumber Jaya Furniture'
        ];

        return view('admin/form-add-barang', $data);
    }
    
}
