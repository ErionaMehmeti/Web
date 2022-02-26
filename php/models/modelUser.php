<?php
require_once('../database/config.php');
    class User extends dbConnect {
        private $id;
        private $username;
        private $email;
        private $password;
         private $select1;
       
        public function __construct($id='', $username='',
        $email='', $password='', $select1='')
        {
            
        $this->id=$id;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        $this->select1=$select1;
        $this->dbconn=$this->connectDB();
}
public function setId($id){
    $this->id=$id;
    }
    public function getId(){
    return $this->id;
    }
    public function setUsername($username){
    $this->username=$username;
    }
    public function getUsername(){
    return $this->username;
    }
    public function setEmail($email){
    $this->email=$email;
    }
    public function getEmail(){
    $this->email;
    }
    public function setPassword($password){
    $this->password=$password;
    }
    public function getPassword(){
    return $this->password;
    }
     public function setSelect1($select1){
    $this->select1=$select1;
     }
     public function getSelect1(){
    return $this->select1;
  }
    // public function setConfpass($Confpass){
    //     $this->password_2=$Confpass;
    //    }
    //     public function getConfpass(){
    //     return $this->password_2;
    //     }
    public function insertoDhenat(){
        $sql="INSERT INTO users (username,email,password,user_admin)
        VALUES (?,?,?,?)";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->username,$this->email,$this->password,$this->select1]);
        echo "<script>
        alert('Te Dhenat jane REGJISTRUAR me sukses');
        document.location='login.php';
        </script>";
    }
        public function lexoDhenat(){
            $sql='SELECT * FROM users';
            $stm=$this->dbconn->prepare($sql);
            $stm->execute();
            $rezultati =$stm->fetchAll(PDO::FETCH_ASSOC);
            return $rezultati;
            }
            
        public function lexoDhenatSipasIDs($id){
            $sql='SELECT * FROM users where id=:id';
            $stm=$this->dbconn->prepare($sql);
            $stm->execute([':id'=>$this->id=$id]);
            $rezultati =$stm->fetch(PDO::FETCH_ASSOC);
            return $rezultati;
            }

            public function updateDhenat(){
                $sql='UPDATE users SET username=?, email=?, password=?, user_admin=? where id=?';
                $stm=$this->dbconn->prepare($sql);
                $stm->execute([$this->username, $this->email,$this->password,$this->select1, $this->id]);

                return header('Location: adminPage.php');
                // echo "<script>
                // alert('Te Dhenat jane REGJISTRUAR me sukses');
                // document.location='adminPage.php';
                // </script>";
                }
                public function deleteDhenat($id){
                $sql="DELETE FROM users WHERE id=:id";
                $stm=$this->dbconn->prepare($sql);
                $stm->bindParam(':id',$id);
                $stm->execute();
                if ($stm==true){
                echo "<script>
                alert('dhenat jane DELETE me sukses');
                document.location='adminPage.php';
                </script>";
                }
            else {
                 return false;
             }
         }
   }     

 ?>         