<?php

namespace App\Models;

use CodeIgniter\Model;

class modelInventaris_user extends Model
{
    protected $table = 'inventaris_user';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;
    protected $allowedFields = ['id', 'id_user', 'id_inventaris', 'jumlah_pinjaman', 'tanggal_pinjaman', 'tanggal_dikembalikan', 'konfir_kembali', 'keterangan'];

    public function getInventUser($id_user = false)
    {
        if ($id_user == false) {
            return $this->findAll();
        }

        return $this->where(['id_user' => $id_user])->first();
    }
}
