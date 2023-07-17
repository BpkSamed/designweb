<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "pengguna";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['username', 'password', 'email'];
	public function getByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
	
}