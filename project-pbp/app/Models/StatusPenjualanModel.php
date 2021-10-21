<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusPenjualanModel extends Model
{
    protected $table      = 'status_penjualan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idpenjualan','idstatus','tgl_update','idpetugas'];
}