<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Wepfemployee extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect('result');
       ########  firstname lastname ,email those jobTitle are sales Rep############
    
       //    SELECT `firstName`, `lastName`, `email` FROM `employees` WHERE `jobTitle` = 'Sales Rep'
    //     $db = \Config\Database::connect('result');
    //     $builder = $db->table('employees')->select('firstName,lastName,email');
    //    $employee=  $builder->where (array('jobTitle' => 'Sales Rep')); 
    //     $builder = $db->table('employees')->select('firstName,lastName,email')->where('jobTitle="Sales Rep"'');


    //     $dataresult = $employee->get()->getResult();
    //     echo "<pre>";
    //     // $raw = $builder->get();
    //     // $data = $raw->getResult();
    //     print_r($dataresult);
        // return view("employess",$data);

        // SELECT `firstName`, `lastName`, `email` FROM `employees` WHERE `jobTitle` = 'Sales Rep' AND `reportsTo` = '1143'
        // $db = \Config\Database::connect('result');
        // $builder= $db->table('employees')->select('firstName,lastName,email');
        // $employee = $builder->where (array('jobTitle' => 'Sales Rep','reportsTo'=>'1143'));

        // // $employee = $builder->where (array('reportsTo'=>'1143'));
        // $dataresult = $employee->get()->getResult();
        // echo "<pre>";
        // print_r($dataresult);


        
        
    //     $builder = $db->table('offices,employees');
    //    $row = $builder->select('firstName,lastName,email,country');
    //    $row = $builder->where('employees.officeCode = offices.officeCode and offices.country ="USA" ');

    //     $data = $row->get()->getResult();
    //     echo "<pre>";
    //     print_r($data);

   
//     $builder = $db->table('orders');
//     $builder->select('customerName,phone,city,orderNumber,orderDate,status');
//    $row = $builder->join('customers','customers.customerNumber = orders.customerNumber');
//     $data = $row->get()->getResult();
//     echo "<pre>";
//     print_r($data);

// $builder = $db->table('customers');
// $builder->select('customerName,phone,city,orders.orderNumber,orderDate,status,quantityOrdered,priceEach');
// $row = $builder->join('orders','orders.customerNumber = customers.customerNumber ');
// $row = $builder->join('orderdetails','orderdetails.orderNumber =orders.orderNumber');
// $data = $row->get()->getResult();
// echo "<pre>";
// print_r($data);


// 6no query
$builder = $db->table('orders');
$builder->select('customerName,phone,city,orders.orderNumber,orderDate,quantityOrdered,priceEach,products.productCode,productName')->selectSum('quantityOrdered')->selectSum('priceEach')->groupBy('orders.orderNumber');
$builder->join('customers','customers.customerNumber = orders.customerNumber');
$builder->join('orderdetails','orderdetails.orderNumber = orders.orderNumber');
$builder->join('products','products.productCode = orderdetails.productCode');
$data = $builder->get()->getResult();
echo "<pre>";
print_r($data);


// customerName,city,orderNumber,orderDate,ProductCode,productName,quantityOrdered,priceEach,MSRP FROM orders,

 }
}
