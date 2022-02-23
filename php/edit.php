<?php
require_once 'ProductController.php';
if(isset($_GET['id'])){
    $ProductId = $_GET['id'];
}

$Product = new ProductController;
$currenProduct = $Product->edit($ProductId);

if(isset($_POST['submit'])) {
    $Product -> update($_POST, $ProductId);
}


?>

<form method="post">
     Image:
     <input type="file" name="image" value="<?php echo $currenMenu['product_image'];?>">
     <br>
     Title:
     <input type="text" name="title" value="<?php echo $currenMenu['product_name'];?>">
     <br>
     Pershrkimi:
     <input type="text" name="pershkrimi" value="<?php echo $currenMenu['product_pershkrim'];?>">
     <br>
     Price:
     <input type="number" name="price" value="<?php echo $currenMenu['product_price'];?>">
     <br>
     <input type="submit" name="submit" value="update" >
</form>