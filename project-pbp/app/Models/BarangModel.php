<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'idbarang';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['idbarang','nama','idkategori','keterangan','file_gambar','tampil','harga','berat','stok','tgl_insert','tgl_update'];

    public function getBarang()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, barang.keterangan, barang.berat, kategori.nama AS kategori, barang.harga, barang.stok FROM barang JOIN kategori WHERE barang.idkategori = kategori.idkategori");
        
        return $query;
    }

    public function getBarangid($idbarang)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, barang.keterangan, barang.berat, kategori.nama AS kategori, barang.harga, barang.stok FROM barang JOIN kategori ON barang.idkategori = kategori.idkategori WHERE barang.idbarang = ".$idbarang."");
        
        return $query;
    }
}
