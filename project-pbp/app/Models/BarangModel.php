<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'idbarang';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idbarang','nama','idkategori','keterangan','file_gambar','tampil','harga','berat','stok','tgl_insert','tgl_update'];
}