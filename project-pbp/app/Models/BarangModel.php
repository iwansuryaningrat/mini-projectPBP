<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';

    protected $allowedFields = ['idbarang','nama','idkategori','keterangan','file_gambar','tampil','harga','berat','stok','tgl_insert','tgl_update'];

    public function getBarang($id=false)
    {
        // // $db = \Config\Database::connect();
        // $query = $this->db->query("SELECT barang.idbarang, barang.nama, kategori.nama AS kategori, barang.harga, barang.stok FROM `barang` JOIN kategori WHERE barang.idkategori = kategori.idkategori");
        // // $builder = $db->table('barang');
        // // $builder->select('barang.idbarang', 'barang.nama', 'kategori.nama AS kategori', 'barang.harga', 'barang.stok');
        // // $builder->join('kategori', 'barang.idkategori = kategori.idkategori');
        // // $query = $builder->get();
        // if($id === false){
		// 	$query = $this->db->query("SELECT barang.idbarang, barang.nama, kategori.nama AS kategori, barang.harga, barang.stok FROM `barang` JOIN kategori WHERE barang.idkategori = kategori.idkategori");
		// 	$results = $query->getResult();
		// }else{
		// 	$query = $this->db->query("SELECT barang.idbarang, barang.nama, kategori.nama AS kategori, barang.harga, barang.stok FROM `barang` JOIN kategori WHERE barang.idkategori = kategori.idkategori WHERE customerid=".$id." ");
		// 	$results = $query->getRow();
		// }
		// return $results;
        // // return $query;

        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, barang.keterangan, kategori.nama AS kategori, barang.harga, barang.stok FROM `barang` JOIN kategori WHERE barang.idkategori = kategori.idkategori");
        
        return $query;
    }

    public function getBarangid($idbarang)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT barang.idbarang, barang.nama, barang.keterangan, kategori.nama AS kategori, barang.harga, barang.stok FROM `barang` JOIN kategori WHERE barang.idkategori = kategori.idkategori AND idbarang = $idbarang");
        
        return $query;
    }
}
