<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReportController extends BaseController
{
    public function stafflist()
    {
    //    $db = \Config\Database::connect('sampledb');
    $db = db_connect('sampledb');
       $builder = $db->table('offices');
    //    $data = $builder->get()->getResult();
       $data = $builder->get()->getResultArray();
    // dd($data);
    return view('reports/office_list',['offices'=>$data]);
    // dd diye data table onojai pawya jai
    // dd diye print ar moto test kora hoi
    //    print_r($data);
    }
    public function allstaff(){
        $code = $_GET['offcode'];
        $db = db_connect('sampledb');
        $builder = $db->table('employees');
        $builder->where('officeCode ', $code);
        $data['employes'] = $builder->get()->getResultArray();
        return view('reports/off_staff_list', $data);
        // dd($data);

    }
 public function orderlist(){
    // $db = db_connect('sampledb');
    // $builder = $db->table('orders');
    //     $data['orders'] = $builder->get()->getResultArray();
        return view('orders/orderlist');
 }
 public function allorder(){
    $start = $_GET['start'];
    $end = $_GET['end'];
     $db = db_connect('sampledb customerName,phone,city,orderNumber,orderDate,status FROM orders,customers
      WHERE orders.customerNumber = customer.customerNumber AND orders.orderDate bewteen ');   
    $builder= $db->query('SELECT ');

    orders.customerName = customers.customerNumber
 }
  
}
