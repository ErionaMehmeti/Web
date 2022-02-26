<?php
require_once '../controller/ProductController.php';
if(isset($_GET['id'])){
    $ProductId = $_GET['id'];
}

$Product = new ProductController;
$currenProduct = $Product->edit($ProductId);

if(isset($_POST['submit'])) {
    $Product -> update($_POST, $ProductId);
}


?>
<div>
    <div class="header">
        <table >
            <th>Edit Product</th>
        </table></div>
    <form method="post">

        <p>Image:</p> 
        <input type="file" name="image" value="<?php echo $currenMenu['product_image'];?>">
        <br>

        <p>Title:</p>
        <input type="text" name="title" value="<?php echo $currenMenu['product_name'];?>">
        <br>

        <p>Pershrkimi:</p> 
        <input type="text" name="pershkrimi" value="<?php echo $currenMenu['product_pershkrim'];?>" >
        <br>

        <p>Price:</p>  
        <input type="number" name="price" value="<?php echo $currenMenu['product_price'];?>">
        <br>
        <br>
        <input class="submit" type="submit" name="submit" value="update" >
    </form>
</div>
<style>
    div{
        box-shadow: 5px 5px 8px #888888;
        width:250px;
        margin-left:40% ;
        padding-left:70px; border-top-left-radius:7px;
        border-top-right-radius: 7px;
        height:430px;
    }
    .header{
        background-color:#9bacd0;
        width:250px;
        height: 50px;  
        border:none;
        margin-left:-70px;    
    }
    th{
        color:white;
        font-size:20px;
        padding-left:30px;
        padding-top:10px;
      
    }
    .submit{
        margin-top:10px;
        border:none;
        font-size:15px;
        width:70px;
        border-radius:3px;
        background-color:#2596be;
        color:black;
        height:25px;
    }
</style>