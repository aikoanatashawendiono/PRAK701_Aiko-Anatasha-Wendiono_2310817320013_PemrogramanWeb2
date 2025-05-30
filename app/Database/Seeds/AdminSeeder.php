<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email'    => 'admin@mail.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
        ];

        $this->db->table('user')->insert($data);
    }
}
