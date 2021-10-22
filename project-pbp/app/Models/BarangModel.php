<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'idbarang';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idbarang','nama','idkategori','keterangan','file_gambar','tampil','harga','berat','stok','tgl_insert','tgl_update'];

    // public function getBarang()
    // {
    //     $db = \Config\Database::connect();
    //     $builder = $db->table('barang');
    //     $builder->select('barang.nama, kategori.nama, barang.harga, barang.stok');
    //     $builder->join('kategori', 'barang.idkategori = kategori.idkategori');
    //     $query = $builder->get();

    //     return $query;
    // }
}

