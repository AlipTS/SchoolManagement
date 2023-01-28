<?php

namespace App\Models;

use CodeIgniter\Model;

class modelUser extends Model
{
    protected $table = 'user';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'email', 'username', 'fullname', 'user_image'];

    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
