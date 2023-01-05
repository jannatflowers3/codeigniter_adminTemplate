<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use\App\Models\ProdutcModel;
class TestController extends BaseController
{
    public function index()
    {
        return view('pages/home_page');
    }
    public function about(){
        return view('pages/about_page');
    }
    public function contact(){
        return view('pages/contactus');
    }
    public function product_list(){
        $model = new ProdutcModel();
        $data = [
            'products' => $model->paginate(10),
            'pager' => $model->pager,
        ];
        return view('pages/list',$data);
    }
   
    // $parser = new \CodeIgniter\View\Parser();

}
