<?php
require_once 'ProductController.php';

$product = new ProductController;
if(isset($_POST['submit'])){
    $product -> insert($_POST);
}


?>
<div>
    <form method ="POST">
        Image:
        <input type="file" name="image">
        <br>
        <br>
        Title:
        <input type="text" name="title">
        <br>
        Pershrkimi:
       <input type="text" name="pershkrimi">
        <br>
        Price:
       <input type="number" name="price">
        <br>
        
 
    <input type="submit" name ="submit" value="Save">
    </form>
</div>
