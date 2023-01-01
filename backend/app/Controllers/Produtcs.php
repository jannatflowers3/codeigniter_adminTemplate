<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProdutcModel;
use App\Models\Category;
use CodeIgniter\API\ResponseTrait;
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
    use RESponseTrait;
    public function index()
    {
        $modeldata = new ProdutcModel();
         $data['allproducts'] = $modeldata->orderBy('id','DESC')->findAll();
        //   print_r($data);
        //   return view('products/product_list',$data);
        return $this->respond($data);
    
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
      
        $model = new Category();
        $data['cats'] = $model->orderBy('category_name','ASC')->findAll();
        // return redirect()->to("produtcs");
        // return view("products/product_edit",$data);
        // print_r($data);
        return view("products/product_enty",$data);
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
                   'product_img' => [
                    'uploaded[product_img]',
                    'mime_in[product_img,image/jpg,image/jpeg,image/png]',
                    'max_size[product_img,1024]',
                ]

                // 'product_img' => [
                //     // 'uploaded[file]',
                //     'mime_in[product_img,image/jpg,image/jpeg,image/png]',
                //     'max_size[product_img,1024]',
                // ]

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
                         'product_img' =>[
                        'mime_in' => 'Only jpg, png, jpeg are allowed',
                        'max_size' => 'Maximum size 1025',
                                                
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
                        $img = $this->request->getFile('product_img');
                        // $img->move('uploads'); publilc folder upload name folder create hobe
                       $path = "/assests/".'uploads/';
                        $img->move($path);
                        
                        $data['product_name'] =$this->request->getPost('product_name');
                        $data['product_details'] =$this->request->getPost('product_details');
                        $data['product_price']  =$this->request->getPost('product_price');
                        $data['product_category']  =$this->request->getPost('cat_name');
                        $namepath = $path . $img->getName();
                        $data['product_img'] =$namepath; 
 
                        $model = new ProdutcModel();
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

                    $img = $this->request->getFile('product_img');
                    $path = "/assests/".'uploads/';
                    $img->move($path);

                    $namepath = $path . $img->getName();
                    $data['product_img'] =$namepath; 
                    // $data = $this->request->getPost();
                    // aivabe o kora jai
                    $data['product_name'] = $this->request->getPost("product_name");
                    $data['product_details'] = $this->request->getPost("product_details");
                    $data['product_price'] = $this->request->getPost("product_price");
                    $data['category_name'] = $this->request->getPost("cat_name");
                    // $data['product_img'] = $this->request->getPost("product_img");
                    
                    $model = new ProdutcModel();
                   
                    
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
