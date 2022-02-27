<?php
@include '../database/config.php';

// session_start();
// if(!isset($_SESSION['admin_username'])){
//     header('location:adminPage.php');
// }
?>
<?php
require_once('../models/modelUser.php');
$dhenat=new User();
$all=$dhenat->lexoDhenat();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
    *{
    margin: 0;
    padding: 0;

    }
    .container{
        width: 100%;
        height: 400px;
        margin-top:20px;
    }
    .container .content{
        text-align: center;
    }
    .container .content h3{
        font-size: 30px;
        color: #333;
    }
    .container .content h3 span{
        background-color: crimson;
        color: white;
        border-radius: 5px;
        padding: 0 15px;
    }
    .container .content h1{
        font-size: 50px;
        color: #333;
    }
    .container .content h1 span{
    color: crimson;
    }
    .container .content p{
        font-size: 25px;
        margin-bottom: 20px;
    }
    .container .content .btn{
        display: inlin1e-block;
        padding: 10px 30px;
        font-size: 20px;
        background-color: #333;
        color: #fff;
        margin: 0 5px;
    }
    .container .content .btn:hover{
        background: crimson;
    }
    .btn1{
        width:150px;
        background: crimson;
        border:none;
        height: 40px;
        border-radius:7px;
    }
    button a{
        text-decoration:none;
        color:white;
    } 
   .btn1{
    width:150px;
    background: crimson;
    border:none;
    height: 40px;
    border-radius:7px;
    color:white;
    }
    .btn1 a{
    text-decoration:none;
    color:white;
    }
    table{
        width:90%;
        margin-left:5%;
        margin-top:3%;
        border-collapse:collapse;
    }
    thead{
        background: #9bacd0;
        height:30px;
        font-size:20px;
        margin-bottom:50px;
       
    }
   
    #delete{
        border: none;
        background: #fff;
        
    }
    #delete:hover{
        color: red;
        
    }
    #edit{
        border: none;
         background: #fff;
         margin-left:10px
    }
    #edit:hover{
        color: green;
       
    }

    </style> 
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>hi <span>Admin</span></h3>
            <h1>Welcome <span></span></h1>
   
             <p>Lista e te dhenave:</p>
             <button class="btn1"><a href="ProductDashboard.php">Add Products </a> </button>
             <table>
                <thead>
                <tr>
                <th>Emri</th>
                <th>Email</th>
                <th>Password</th>
                <th>User Type</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>
             <tr>
            <?php
            
             foreach($all as $key=>$value){
            ?>
            <td><?php echo $value['username']?></td>
             <td><?php echo $value['email']?></td>
            <td><?=$value['password']?></td>
            <td><?=$value['user_admin']?></td>
            <td id='de'><a href="deleteUser.php?id=<?php echo $value['id']?>"><button id="delete">DELETE</button></a>
            <a href="editUser.php?id=<?php echo $value['id']?>"><button id='edit'>EDIT</button></td></a>
            </tr>
            <?php
            }
            ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>