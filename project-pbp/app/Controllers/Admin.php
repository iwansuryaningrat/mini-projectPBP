<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard | Sumber Jaya Furniture'
        ];

        return view('admin/index', $data);
    }

    public function barang()
    {
        $data = [
            'title' => 'Data Barang | Sumber Jaya Furniture'
        ];

        return view('admin/data_barang', $data);
    }

    public function transaksi()
    {
        $data = [
            'title' => 'Data Transaksi | Sumber Jaya Furniture'
        ];

        return view('admin/data_transaksi', $data);
    }
}
