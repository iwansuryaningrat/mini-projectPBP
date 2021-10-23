<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table      = 'kategori';
    protected $primaryKey = 'idkategori';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['idkategori','nama'];

    public function getKategori($idkategori)
    {
        return $this->where(['idkategori' => $idkategori])->first();
    }
    // public function delete($idbarang)
    // {

    //     $this->db->where('idbarang',$idbarangid);
    //     $this->delete('barang');
    // }
}