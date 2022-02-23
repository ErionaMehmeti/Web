<?php
    require_once 'ProductController.php';
 
?>

<style>
*{
font-family: sans-serif;
}

.content-table {
border-collapse: collapse;
margin: 25px 0;
font-size: 0.9em;
width: 100%;
border-radius: 5px 5px 0 0;
overflow: hidden;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
background-color: #009879;
color: #ffffff;
text-align: left;
font-weight: bold;
}

.content-table th,
.content-table td {
padding: 12px 15px;
}

.link{
text-decoration: none;
color: red;
font-size: 17px;
}
.first-link{
color: black;
font-size: 22px;
padding-left: 50%;
position: relative;
top: 20px;
}
.top-links{
font-size: 30px;
color: black;
padding: 30px;
text-decoration: none;
}
button {
    width:150px;
    background-color:#009879;
    
    border:none;
    height: 40px;
    border-radius:7px;
}
button a{
    text-decoration:none;
    color:white;
}
</style>


<div>
<table class="content-table">
<thead>
<tr>
<th>Product image</th>
<th>Product title</th>
<th>Prroduct Pershkrimi</th>
<th>Product Price</th>
<th>Edit</th>
<th>Delete</th>
</tr>


</thead>
<tbody>
<?php

 
    $p = new ProductController;
    $allProduct= $p->readData();
    foreach($allProduct as $product): ?>
    <tr>
        <td><?php echo $product['product_image'];?></td>
        <td><?php echo $product['product_name'];?></td>
        <td><?php echo $product['product_pershkrim'];?></td>
        <td><?php echo $product['product_price'];?></td>
        <td><a href="edit.php?id=<?php echo $product['id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $product['id'];?>">Delete</a></td>
       
    </tr>
    <?php endforeach; ?>
     <button > <a href="create.php?id=<?php echo $product['id'];?>"> Add Products </a> </button>
</tbody>
</table>

</div>