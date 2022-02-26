<?php
    require_once('../models/modelUser.php');
     $dhenat= new User();
    $myId=$_GET['id'];
     $record=$dhenat->lexoDhenatSipasIDs($myId);
        if (isset($_POST['edit'])){
      if ($myId==$dhenat->getId()){
     $dhenat->setUsername($_POST['username']);
      $dhenat->setEmail($_POST['email']);
     $dhenat->setPassword($_POST['password_1']);
     $dhenat->setSelect1($_POST['select1']);
       echo $dhenat->updateDhenat();
      return header('Location: adminPage.php');
    echo
     "<script>
 alert('dhenat jane PERDITSUAR me sukses');
 document.location='adminPage.php'
     </script>";
     }
    }  
?>


<!DOCTYPE html>
<htm>
    <head>
        <link rel="stylesheet" href ="../Style/login.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
    <form method="post" id="RegForm">
        <div class="input-group">
           <label>Username</label>
           <input type="text" name="username"placeholder="Username">
         </div>
        <div class="input-group">
      <label>Email</label>
         <input type="email" name="email" placeholder="Email">
          </div>
       <div class="input-group">
        <label>Password</label>
          <input type="password" name="password_1" placeholder="Password" >
         </div>
         <div class="input-group">
          <label>Confirm password</label>
       <input type="password" name="password_2" placeholder="Confirm Pasword" >
         </div>
           <div class="select"  >
          <Select class="option" name="select1" >
              <option value="">Select</option>
              <option value="user" name='user'>User</option>
               <option value="admin" name='admin'>Admin</option>
             </Select>  
              <div class="input-group">
                <button type="submit" class="btn" name="edit">Ruaj</button>
         </div>
</div>
  </form>
    </body>
</htm>