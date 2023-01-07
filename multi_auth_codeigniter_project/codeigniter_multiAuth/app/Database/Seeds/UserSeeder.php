<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;
class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

		$user_object->insertBatch([
			[
				"name" => "Jannat",
				"email" => "jannat@mail.com",
				"phone_no" => "0134544",
				"role" => "admin",
				"password" => password_hash("jannat", PASSWORD_DEFAULT)
			],
			[
				"name" => "Sultana",
				"email" => "sultana@mail.com",
				"phone_no" => "01436676",
				"role" => "editor",
				"password" => password_hash("jannat", PASSWORD_DEFAULT)
            ],
            [
				"name" => "Aklima",
				"email" => "aklima@mail.com",
				"phone_no" => "0123434",
				"role" => "editor",
				"password" => password_hash("jannat", PASSWORD_DEFAULT)
			]
		]);
    }
}
