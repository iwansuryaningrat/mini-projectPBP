<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table      = 'penjualan';
    protected $primaryKey = 'idpenjualan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idpenjualan','idpelanggan','tgl_penjualan','total_harga','total_item','total_berat','ongkir','jenis_pengiriman','nama_kirim','alamat_kirim','idkota_kirim'];
}