<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'email', 'password', 'image', 'role_id', 'is_active'];
    public function getUser($type = 'id', $value = false)
    {
        if ($value == false) {
            return $this->findAll();
        } else {
            return $this->where([$type => $value])->first();
        }
    }
}
