<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Qb extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('produtcs');
          echo "<pre>";
          $raw = $builder->get();
        $data['products'] = $raw->getResult();
        // print_r($data);
        return view("Test",$data);



        // $builder = $db->table('produtcs')->limit(3,5);
        // $builder = $db->table('produtcs');
        
        // echo "<pre>";
        // $raw = $builder->getWhere(['id'=> 2]);
        // $data = $raw->getResult();
        // print_r($data);
               
        ###category and total price  ########
        // $builder = $db->table('produtcs')->select('product_category')->selectSum('product_price')->groupBy('product_category')->get();
      
        //  $data = $builder->getResult();
        //  echo "<pre>";
        //  print_r($data);

 ###1 table ar sateh onno table connect ########
       
//  $builder = $db->table('produtcs'); 
//         $builder->join('categories','categories.id = produtcs.product_category');
//         $data = $builder->get()->getResult();
//         echo "<pre>";
//         print_r($data);


###1 product table ar prodcut price 1000 ar besi hole########
// $builder = $db->table('produtcs');
      

// $builder->where('product_price >1000');
// $builder->where('product_category > 3');
// $data = $builder->get()->getResult();
// echo "<pre>";
// print_r($data);
      

###1 product table ar prodcut price 1000 ar besi hole########
$builder = $db->table('produtcs');     
$builder->where('product_price >1000');
$builder->where('product_price < 3000');
$builder->where('product_category < 3');
$data = $builder->get()->getResult();
echo "<pre>";
print_r($data);
    }
}
