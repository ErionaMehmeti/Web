<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Contact Us</title>
    <link rel="stylesheet" href="../Style/contact.css">
</head>
<body><?php
    require_once 'header.php';
?>
 <div class="login">
        <div class="contact-img">
            <img class="img" src="../img/Room.jpg" alt="">
        </div>
        <div class="contact-form">
            <h2>Get in touch</h2>

                <form action="message.php" method="POST" >
                <h4>Your Name</h4>
                <input type="text" placeholder="Name" id="username" name="username" required>
                <h4>Mail</h4>
                <input type="email" placeholder="Email" id="email" name="email" required >
                <h4>Message</h4>
                <textarea name="mesazhi" id="message" cols="45" rows="8" placeholder="Message" required></textarea>
                <br>
                <button name="send"  onclick="contactbtn()"  >Send Message</button>
            </form>
        </div>
    </div>
 
   
    
<?php
    require_once 'footer.php';
?>
</body>
</html>
