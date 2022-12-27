<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
            'product_name' => 'Black',
            'product_details'    => 'Jacket Details',
            'product_price'    => '2000',
        ],
        [
            'product_name' => 'Red Shirt',
            'product_details'    => 'Shirt Details',
            'product_price'    => '2000',
        ],
        [
            'product_name' => 'Red Shirt',
            'product_details'    => 'Jacket Details',
            'product_price'    => '2000',
        ],
        [
            'product_name' => 'Yellow Shirt',
            'product_details'    => 'Jacket Details',
            'product_price'    => '2000',
        ],
    ];
        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach ($datas as $data){
        $this->db->table('produtcs')->insert($data);
        }
    }
}
