<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';

    protected $allowedFields = ['idbarang','nama','idkategori','keterangan','file_gambar','tampil','harga','berat','stok','tgl_insert','tgl_update'];

    public function getBarang()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('barang');
        $builder->select('*');
        $builder->join('kategori', 'kategori.idkategori = barang.idkategori');
        $query = $builder->get();

        return $query;
    }
}