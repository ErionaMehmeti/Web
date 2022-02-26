<?php
    require_once '../controller/ProductController.php';
 
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
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
background-color: #9bacd0;
color: #ffffff;
text-align: left;
font-weight: bold;
}

.content-table th,
.content-table td {
padding: 12px 15px;
}

button {
    width:150px;
    background-color:#9bacd0;
    
    border:none;
    height: 40px;
    border-radius:7px;
}
button a{
    text-decoration:none;
    color:white;
}
td a{
    text-decoration:none;
    color:black;
}
td a:hover{
    color:blue;
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