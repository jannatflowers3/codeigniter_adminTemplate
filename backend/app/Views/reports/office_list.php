
<?php  echo $this->include('products/product_header.php')?>
 
 <!-- /.navbar -->
 <?php  echo $this->include('Layout/top_nav.php')?>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
     <img src="/assests/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">AdminLTE 3</span>
   </a>

   <!-- Sidebar -->
   <?php  echo $this->include('Layout/leftSidebar.php')?>
   <!-- /.sidebar -->
 </aside>

 <!-- Content Wrapper. Contains page content -->
 <?php if (session()->has('msg')) : ?>
<script>
function tempAlert(msg, duration) {
var el = document.createElement("div");
el.setAttribute('class', 'alert alert-success text-white');
el.setAttribute("style", "position:absolute;top:20%;left:50%;");
el.innerHTML = msg;
setTimeout(function() {
el.parentNode.removeChild(el);
}, duration);
document.body.appendChild(el);
}

tempAlert('<?= session()->msg; ?>', 5000);
</script>
<?php endif; ?>

 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Dashboard</h1>
            <a href="/produtcs/new/" class="btn btn-success">Add Staff List</a>
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
             <li class="breadcrumb-item active">Stafflist </li>
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
         <h1 class="text-center">Welcome to our staff list</h1>
         </div>
       </div>
      </div>

      <div class="card">    
              <!-- /.card-header -->
              <div class="card-body">
                <h1>Office List</h1>
               <form action="">
             
                <select name="" id="officecode">
                    <option value="">Selected 
                      
                    </option>
                <?php foreach( $offices as $office):?>
                    <option value="<?= $office['officeCode']?>"><?= $office['city']."(".$office['country'].")"?></option>
                    <?php endforeach;?>
                </select>
              
               </form>
               <div id="show">
           
            </div>
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

 <?php  echo $this->include('products/product_footer.php')?>