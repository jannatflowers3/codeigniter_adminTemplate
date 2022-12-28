
<?php  echo view('products/product_header.php')?>
 
 <!-- /.navbar -->
 <?php  echo view('Layout/top_nav.php')?>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <img src="/assests/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">AdminLTE 3</span>
   </a>

   <!-- Sidebar -->
   <?php  echo view('Layout/leftSidebar.php')?>
   <!-- /.sidebar -->
 </aside>

 <!-- Content Wrapper. Contains page content -->


 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Dashboard</h1>
            <a href="/produtcs/new/" class="btn btn-success">Add Product</a>
           <?php 
             $error = [];
                if(session()->has('msg')):?>
                   <div class="alert alert-success"><?= session()->msg;?></div>
                 
          <?php endif ?>
          <?php 
             $error = [];
                if(session()->has('delete')):?>
                   <div class="alert alert-danger"><?= session()->delete;?></div>
                 
          <?php endif ?>
          <?php 
             $error = [];
                if(session()->has('add')):?>
                   <div class="alert alert-success"><?= session()->add;?></div>
                 
          <?php endif ?>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">Dashboard v1</li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       
       <!-- Main row -->
 
      <div class="row">
      <div class="col-lg-12">
      <div class="card bg-dark">
       <div class="card-header">
         <div class="card-body">
         <h1 class="text-center">WELCOME TO products</h1>
         </div>
       </div>
      </div>

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Products Price</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($allproducts as $allproduct):?>
                  <tr>
                    <td><?=  $allproduct['id']?></td>
                    <td><?=  $allproduct['product_name']?></td>
                    <td><?=  $allproduct['product_details']?></td>
                    <td><?=  $allproduct['product_price']?></td>
                    <td>
                     <a href="<?= site_url("produtcs/edit/".$allproduct['id'])?>" class="btn btn-success" >Edit</a> 
                     <!-- <a href="produtcs/edit/<?php //echo $allproduct['id'] ?>" class="btn btn-success" >Edit</a>  -->
                     <a href="produtcs/delete/<?php echo $allproduct['id'] ?>" class="btn btn-primary" >Delete</a> </td>
                   
                  </tr>
                  <?php endforeach;?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
      </div>




      
       <!-- /.row (main row) -->
     </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <!-- footer  -->
 <footer class="main-footer text-dark">
    <strong>Copyright &copy; 2022-2023 <a href="https://github.com/jannatflowers3" target="_blank">Jannatflowers</a>.</strong>
    All rights reserved.

  </footer>
 <?php  echo view('products/product_footer.php')?>