
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>PRODUCT ALL DATA </h1>
   <?php
// foreach($products as $product){
//    echo $product->product_name."<br>";
// }


?>

<table class="table table-striped table-dark bordered">
  <thead>
    <tr>
  
      
      <td>product name</td>
      <td>product details</td>
      <td>product price</td>
      
    </tr>
  </thead>
  <tbody>
   <?php  foreach($products as $product){?>

  
    <tr>
    <th><?= $product->product_name ?></th>
      <th><?= $product->product_details ?></th>
      <th><?= $product->product_price ?></th>
    </tr>
    <?php } ?>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>