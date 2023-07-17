<?php
namespace App\Models;
use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table      = 'karyawan2';
    protected $primaryKey = 'id_karyawan';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama', 'jenis_kelamin', 'no_telp', 'tanggal_lahir', 'alamat','created_at','updated_at'];
    protected $useTimestamps = true;
	protected $validationRules = [
									'nama' => 'required',
									'jenis_kelamin' => 'required',
									'no_telp' => 'required',
									'tanggal_lahir' => 'required',
									'alamat' => 'required'
									];
}