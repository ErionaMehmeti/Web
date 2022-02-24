<?php
if (isset($_POST['send'])) {
    if (isset($_POST['username']) &&
        isset($_POST['email'])  &&
        isset($_POST['mesazhi']) ) {
        

$username = $_POST['username'];
$email = $_POST['email'];
$mesazhi = $_POST['mesazhi'];

    $host ='localhost';
    $dbUsername='root';
    $dbPassword="";
    $dbname='contact';



$conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if($conn->connect_error){
        die('Could not connect to the database');
    }
    else{
        $SELECT = "SELECT email from contact where email = ? limit 1";
        $INSERT = " INSERT into contact(username,email,mesazhi) 
        values (?,?,?)";
        $stmt =$conn->prepare($SELECT);
        $stmt ->bind_param("s",$username,$email,$mesazhi);
        $stmt ->execute();
        $stmt->bind_result($resultEmail);
        $stmt ->store_result();
        $stmt ->fetch();
        $rnum= $stmt->num_rows;

        if($rnum==0){
            $stmt ->close();

            $stmt =$conn->prepare($INSERT);
            $stmt->bind_param("ssssii",$username,$email,$mesazhi);
            if($stmt->execute()){
        echo "New record inserted secessfully";
        }
            else{
                echo $stmt->error;
            }
        }  
        else{
            echo"Someone already send this message";
        }

        $stmt->close();
        $conn->close();

        }
    }

   else {
            echo "All field are required";
            die();
        }
 }
  else {
      echo "Save button is not seet";
  }
?>