<?php
namespace App\Models;

use CodeIgniter\Model;

class BelanjaModel extends Model
{
    protected $table = 'belanja';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'web_pertama', 'web_kedua', 'web_ketiga'];
    protected $useTimestamps = false;
}
?>