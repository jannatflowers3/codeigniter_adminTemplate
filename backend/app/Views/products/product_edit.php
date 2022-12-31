
<?php  echo view('products/product_header.php')?>
 
 <!-- /.navbar -->
 <?php  echo view('Layout/top_nav.php')?>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <img src="/assests/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">AdminLTE 3</span>
   </a>

   <!-- Sidebar -->
   <?php  echo view('Layout/leftSidebar.php')?>
   <!-- /.sidebar -->
 </aside>

 <!-- Content Wrapper. Contains page content -->


   <!-- /.content-header -->

   <!-- Main content -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Product Edit Form</h1>
            <?php?>
          </div>
          <?php 
             $error = [];
                if(session()->has('myerrors')){
                   $errors = session('myerrors');
          } ?>
          <!-- <div class="col-sm-10">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Edit From</li>
            </ol>
          </div>
        </div> -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class=" col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?= base_url("produtcs/update/".$productedit['id'])?>"
               enctype="multipart/form-data">
                <div class="card-body">
               
             <!-- product img -->
             <div class="form-group">
                    <label for="pdetails">Product Image</label>
                    <input type="file" class="form-control" id="pdetails"  name="product_img" 
                    value="" ><img src="<?= old('product_img')?old('product_img'):$productedit['product_img']?>"/> 
                      
                        </textarea>
                        <span class="text-danger"> <?php  
                      if(isset($errors['product_img'])){
                      echo  $errors['product_img'];    
                      }
                    ?></span>
                  </div>

                  <div class="form-group">
                    <label for="pname">Product Name</label>
                    <input type="text" class="form-control" id="pname" 
                    value="<?= old('product_name')? old("product_name"): $productedit['product_name']?>" name ="product_name" placeholder="Enter Product Name">
                    <span> <?= isset($errors['product_name']) ?
                        $errors['product_name']:'' ?></span>
                  </div>


                  <div class="form-group">
                    <label for="pdetails">Product Details</label>
                      <textarea id="summernote" class="form-control" 
                      name ="product_details" placeholder="Enter product details">
                    <?= old('product_details')? old("product_details"): $productedit['product_details']?>
                        </textarea>
                        <span> <?= isset($errors['product_details']) ?
                        $errors['product_details']:'' ?></span>
                  </div>

                  <div class="form-group">
                    <label for="pdetails">Product Price</label>
                    <input type="number" class="form-control" id="pdetails"  value="<?= old('product_price')? old("product_price"): $productedit['product_price']?>" name="product_price" placeholder="Product Price">
                    
                        </textarea>
                        <span> <?= isset($errors['product_price']) ?
                        $errors['product_price']:'' ?></span>
                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <!-- footer  -->
 <footer class="main-footer text-dark">
    <strong>Copyright &copy; 2022-2023 <a href="https://github.com/jannatflowers3" target="_blank">Jannatflowers</a>.</strong>
    All rights reserved.

  </footer>
 <?php  echo view('products/product_footer.php')?>