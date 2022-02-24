
<?php
require_once 'ProductController.php';

if(isset($_GET['id'])) {
    $ProductId = $_GET['id'];
    $Product->delete($ProductId);
}
?>