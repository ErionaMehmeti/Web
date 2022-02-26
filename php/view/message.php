<?php

        $conn = mysqli_connect("localhost", "root", "", "contact");
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
            if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['mesazhi'])){

        $username =  $_REQUEST['username'];
        $email = $_REQUEST['email'];
       $mesazhi = $_REQUEST['mesazhi'];


  
        $sql = "INSERT INTO sendmessage(username, email, mesazhi)  VALUES ('$username', 
            '$email','$mesazhi')";
          
        if(mysqli_query($conn, $sql)){
            header("Location:  contact.php?mesazhi=send");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }else {
        echo "All fields are required";
    }
          

        mysqli_close($conn);
        ?>