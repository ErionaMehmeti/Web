<?php
require_once 'db.php';

class ProductController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from product');

       return  $query ->fetchAll();
    }

    public function insert($request){
        $request['image']='../img/' .$request['image'];
        $query = $this ->db->pdo->prepare('INSERT into product (product_image,product_name,product_pershkrim,product_price)
         VALUES (:product_image,:product_name,:product_pershkrim,:product_price)');


         $query ->bindParam(':product_image',$request['image']);
         $query ->bindParam(':product_name',$request['title']);
         $query ->bindParam(':product_pershkrim',$request['pershkrimi']);
         $query ->bindParam(':product_price',$request['price']);
         

         $query ->execute();

         return header('Location:ProductDashboard.php');
    }
    public function edit($id){
        $query = $this ->db->pdo->prepare('SELECT * from product WHERE id = :id');

        $query ->bindParam(':id', $id);
        
        $query ->execute();

         return $query ->fetch();
    }

    public function update($request, $id){
        $request['image']='../img/' .$request['image'];
        $query = $this->db->pdo->prepare('UPDATE product  SET product_image = :product_image, product_name = :product_name, product_pershkrim = :product_pershkrim,product_price=:product_price WHERE id = :id');

        $query ->bindParam(':product_image',$request['image']);
        $query ->bindParam(':product_name',$request['title']);
        $query ->bindParam(':product_pershkrim',$request['pershkrimi']);
        $query ->bindParam(':product_price',$request['price']);
        $query->bindParam(':id',$id);
        $query ->execute();

        return header('Location: ProductDashboard.php');
    }
    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from product WHERE id=:id');
        $query ->bindParam(':id', $id);
        $query ->execute();
        if($query==true){
            echo "<script> 
            alert('Produkti eshte fshire me sukses')
            document.location='ProductDashboard'
            </script?";
        }
        else{
            return false;
        }
        return header('Location: ProductDashboard.php');
    }
}
    ?>
