<?php
require_once 'ProductController.php';

$product = new ProductController;
if(isset($_POST['submit'])){
    $product -> insert($_POST);
}


?>
<div>
    <div class="header">
    <table >
        <th> Add Product </th>
    </table></div>
    <form method ="POST">
       
       <p>Image:</p> 
        <input type="file" name="image">
       
       <p>Title:</p> 
        <input type="text" name="title">
       
       <p>Pershrkimi:</p> 
       <input type="text" name="pershkrimi">
       
       <p>Price:</p> 
       <input type="number" name="price">
  
        <br>
    <br>
    <input  class="save" type="submit" name ="submit" value="Save">
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
        background-color:#009879;
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
    .save{
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