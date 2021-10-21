<?php

namespace App\Controllers;

class Edit extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard | Sumber Jaya Furniture'
        ];

        return view('admin/index', $data);
    }
    
}
