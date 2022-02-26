
<?php
require_once  ('../controller/ProductController.php');

$product =new ProductController();
if(isset($_GET['id'])) {
    $productId = $_GET['id'];
    $product->delete($productId);
}
    
?>