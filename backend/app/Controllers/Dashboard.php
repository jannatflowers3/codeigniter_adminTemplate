<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
    //  echo "jannatul feredaush";
     return view("admin_home");
    }
}
