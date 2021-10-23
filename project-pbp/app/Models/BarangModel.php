<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';

    protected $allowedFields = ['idbarang','nama','idkategori','keterangan','file_gambar','tampil','harga','berat','stok','tgl_insert','tgl_update'];

    public function getBarang()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, kategori.nama AS kategori, barang.harga, barang.stok FROM `barang` JOIN kategori WHERE barang.idkategori = kategori.idkategori");
        // $builder = $db->table('barang');
        // $builder->select('barang.idbarang', 'barang.nama', 'kategori.nama AS kategori', 'barang.harga', 'barang.stok');
        // $builder->join('kategori', 'barang.idkategori = kategori.idkategori');
        // $query = $builder->get();

        return $query;
    }
}
