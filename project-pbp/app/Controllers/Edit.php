<?php

namespace App\Controllers;

class Edit extends BaseController
{
    public function editBarang()
    {
        $data = [
            'title' => 'Admin Dashboard | Sumber Jaya Furniture'
        ];

        return view('admin/edit/form-edit-barang', $data);
    }
    
}