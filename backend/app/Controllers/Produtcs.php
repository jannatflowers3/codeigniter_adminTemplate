<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProdutcModel;
class Produtcs extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     * 
     */
    function __construct()
    {
        helper(['form','url']);
    }
    public function index()
    {
        $modeldata = new ProdutcModel();
         $data['allproducts'] = $modeldata->findAll();
        //   print_r($data);
          return view('products/product_list',$data);
    
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view("products/product_enty");
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
       $validate = $this->validate([
        'product_name' => 'required|min_length[5]|max_length[20]',
        'product_details' => 'required|min_length[10]',
        'product_price' => 'required|numeric',
        
       ]);
       if(!$validate){
        return view('products/product_enty',['validation' =>$this->validator]);
       }
       else{
        // echo "yes";
        $model = new ProdutcModel();
        $data = $this->request->getPost();
        $model->save($data);
        return redirect()->to("produtcs");
       }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $productDelete = new ProdutcModel();
     $productDelete->delete($id);
        
        return redirect()->to("Produtcs");
    }
}
