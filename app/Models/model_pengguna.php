<?php

namespace App\Models;

use CodeIgniter\Model;

class model_pengguna extends Model
{
  protected $table = 'pengguna';
  protected $allowedFields = ['username', 'password'];
}