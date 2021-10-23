<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';

    protected $allowedFields = ['idbarang','nama','idkategori','keterangan','file_gambar','tampil','harga','berat','stok','tgl_insert','tgl_update'];

    public function getBarang($id=false)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, barang.keterangan, kategori.nama AS kategori, barang.harga, barang.stok FROM `barang` JOIN kategori WHERE barang.idkategori = kategori.idkategori");
        
        return $query;
    }

    public function getBarangid($idbarang)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, barang.keterangan, kategori.nama AS kategori, barang.harga, barang.stok FROM `barang` JOIN kategori WHERE barang.idkategori = kategori.idkategori AND barang.idbarang = $idbarang");
        
        return $query;
    }
}
