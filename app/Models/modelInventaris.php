<?php

namespace App\Models;

use CodeIgniter\Model;

class modelInventaris extends Model
{
    protected $table = 'inventaris';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama_barang', 'kategori', 'total_barang', 'sedang_dipinjam', 'bisa_untuk_dipinjam', 'penanggung_jawab'];

    public function getInventUser($id_inventaris = false)
    {
        if ($id_inventaris == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id_inventaris])->first();
    }
}
