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
        // $validation = \Config\Services::validation();
                $rules =  [
                    'product_name' => 'required|min_length[5]|max_length[20]',
                   'product_details' => 'required|min_length[10]',
                   'product_price' => 'required|numeric',
                        
                ];
           
         $errors =  [

                  'product_name' =>[
                  'required' => 'product name must be fill',
                 'min_length' => 'Minimum length 5',
                 'max_length' => 'maximum length 20',
                            
                  ],
                  'product_details' =>[
                    'required' => 'product name must be fill',
                   'min_length' => 'Minimum length 5',
                              
                    ],
                    'product_price' =>[
                        'required' => 'product name must be fill',
                       'numeric' => 'Number Only',
                                  
                        ],

                    ];
      
                    $validate = $this->validate([
                        'product_name' => 'required|min_length[5]|max_length[20]',
                        'product_details' => 'required|min_length[10]',
                        'product_price' => 'required|numeric',
                        
                       ]);
                       if(!$validate){
                        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
                       }
                       else{
                        // echo "yes";
                        $model = new ProdutcModel();
                        $data = $this->request->getPost();
                        $model->save($data);
                        return redirect()->to("produtcs")->with('add','Add Successfully');
                       }
}


         

     
    

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new ProdutcModel();
        $data['productedit'] = $model->find($id);
        return view("products/product_edit",$data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $validate = $this->validate([
            'product_name' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required|numeric',
            
           ]);
           if(!$validate){
            return redirect()->back()->withInput()->with('myerrors', $this->validator->getErrors());
           }

                else{
                    $model = new ProdutcModel();
                    // $data = $this->request->getPost();
                    // aivabe o kora jai
                    $data['product_name'] = $this->request->getPost("product_name");
                    $data['product_details'] = $this->request->getPost("product_details");
                    $data['product_price'] = $this->request->getPost("product_price");
                    $model->update($id,$data);
                    return redirect()->to("produtcs")->with('msg',"Update Successfully");
                }
        
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
        
        return redirect()->to("Produtcs")->with('delete',"Delete Successfully");
    }
}
