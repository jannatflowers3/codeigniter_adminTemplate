<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categories extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'category_name' => 'Shirt',
                'category_description'    => 'Big Size Shirt',
               
            ],
            [
                'category_name' => 'Pants',
                'category_description'    => 'Small Size Pants',
            ],
            [
                'category_name' => 'Shoes',
                'category_description'    => 'Big Size Shoes',
            ],
    ];
        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach ($datas as $data){
        $this->db->table('categories')->insert($data);
        }
    }
}
