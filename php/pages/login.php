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
                    <div class="from-container-login">
                        <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm"  method="post" action="login.php">
                    <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username"placeholder="Username"  >
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password" >
                    </div>
                    <div class="select"  >
                    <Select class="option" name="select" >
                    <option value="">Select</option>
                    <option value="user" name='user'>User</option>
                    <option value="admin" name='admin'>Admin</option>  
                    </Select>
                    <div class="input-group">
                        <button type="submit" class="btn" onclick="Loginbtn()" name="login_user">Login</button>
                    </div>
                    
                    <p>
                        Not yet a member? <a href="register.php">Sign up</a>
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