<?php

if(isset($_POST['name']) && isset($_POST['email'])){
      try{
            
            $message=$_POST['msg'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            
            echo $name,$email, $message;
            include('db.php');
            $qry=$conn->prepare("INSERT INTO messages (name, email, message) VALUES(:value1,:value2,:value3)");
            $qry->bindParam(':value1',$name);
            $qry->bindParam(':value2',$email);
            $qry->bindParam(':value3',$message);
            $qry->execute();
            echo "<script>alert('Message sent')</script>";
            sleep(4);
            header('Location:index.html');
            exit;
            
      } catch(PDOException $e){
            echo $e;
            echo "<script>alert('Something went Wrong!')</script>";
            sleep(6);
            header('Location:index.html');
      }
      
}
?>