<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $datas = [
            [
            'name' => 'jannat',
            'email'    => 'jannat@gmail.com',
            'password'    => '2000',
           
        ],
        [
            'name' => 'rahime',
            'email'    => 'rahime@gmail.com',
            'password'    => '2000',
           
        ],
        ['name' => 'sultana',
        'email'    => 'sultana@gmail.com',
        'password'    => '2000',
        ],
        ['name' => 'aklima',
        'email'    => 'aklima@gmail.com',
        'password'    => '2000',
        ],
    ];
        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach ($datas as $data){
        $this->db->table('users')->insert($data);
        }
    }
}
