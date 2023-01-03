<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutcModel;
use CodeIgniter\API\ResponseTrait;
class Frontend extends BaseController
{
    use ResponseTrait;
    public function ProductList()
    {
      $model = new ProdutcModel();
    $produtcs=  $model->orderBy('product_name', 'ASC')->findAll();
      return $this->respond($produtcs);
    }
}
