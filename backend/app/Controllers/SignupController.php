<?php

namespace App\Controllers;

use App\Models\Users;
use App\Controllers\BaseController;

class SignupController extends BaseController
{
    public function index()
    {
        helper(['form']);
      return view("auth/signup");
    }
    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new Users();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            echo "registration completed";
            return redirect()->to('/users/signin');
        }else{
            $data['validation'] = $this->validator;
            echo view('auth/signup', $data);
        }
          
    }
  
}
