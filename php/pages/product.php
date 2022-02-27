<?php
    require_once '../controller/ProductController.php';
 
?>
<style>
.firstItems{
    margin-top:250px;
    
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Product</title>
    <link rel="stylesheet" href="../../Style/product.css">
   <link rel="stylesheet" href="../../Style/productphp.css">
   
    <?php include_once("../view/header.php") ?>

    <style>
        .line{
            margin-left:45%;
        }
    </style>
</head>
<body>
<div class="line1"></div>
    <div class="category">
        <a href="">Sofa</a>
        <a href="">Bed</a>
        <a href="">Chair</a>
        <a href="">Kitchen</a>
        <a href="" class="active">All</a>

    </div>
    <div class="line"></div>
    <div class="produktet">
     <?php
       $products =new ProductController;
       $all=$products->readData();
       for($i = 0; $i < count($all); $i++) {
        echo '
        <div class="div" >
        <img src="'.$all[$i] ['product_image'].'" alt="">
        <p class="productName">' .$all[$i]['product_name']. '</p>
        <p id="text">'.$all[$i] ['product_pershkrim'].'</p>
        <h5>'.$all[$i] ['product_price'].'$</h5>
        <button>Shop</button>
        
        </div>' ;
       }

     ?>
    </div>     


<?php include_once("../view/footer.php")?>