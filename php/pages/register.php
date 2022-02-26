

<?php
require_once('../models/modelUser.php');
if(isset($_POST['reg_user'])){
    $regj= new User();
    $regj->setUsername($_POST['username']);
    $regj->setEmail($_POST['email']);
    $regj->setPassword($_POST['password_1']);
     $regj->setSelect1($_POST['select1']);
    $regj->insertoDhenat();
}
?>

<?php include_once("../controller/registerController.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account</title>
     <link rel="stylesheet" href="../../Style/login.css">
        <?php include_once("../view/header.php")?>

</head>  
<body>
<div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="from-container">
                        <div class="form-btn">
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form method="post" id="RegForm"action="register.php">
                            <div class="input-group">
                            <label>Username</label>
                            <input type="text" name="username"placeholder="Username" value="<?php echo $username;?>">
                            </div>
                            <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email" value="<?php echo $email;?>">
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
                            <button type="submit"  onclick="Registerbtn()" class="btn" name="reg_user">Register</button>
                            </div>
                            </div>
                        <p>Already a member? <a href="login.php">Sign in</a>
                	</p>
  </form>
                 </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/account.js"></script>
</body> 

<?php include_once("../view/footer.php")?>

</html>