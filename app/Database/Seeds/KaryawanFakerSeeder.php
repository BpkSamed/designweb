<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KaryawanFakerSeeder extends Seeder
{
    public function run()
    {
     $faker = \Faker\Factory::create('id_ID');
 
		for ($i = 0; $i < 100; $i++) {
			$jk = $faker->randomElement(['pria', 'wanita']);

			if ($jk == "pria") {
				$gender = "male";
			} else {
				$gender = "female";
			}

			$data = [
				'nama' => $faker->name($gender),
				'jenis_kelamin' => $jk,
				'no_telp' => $faker->phoneNumber,
				'tanggal_lahir' => $faker->date('Y-m-d', 'now'),
				'alamat' => $faker->address,
				
			];

			$this->db->table('karyawan3')->insert($data);
		}
    }   //
    }

