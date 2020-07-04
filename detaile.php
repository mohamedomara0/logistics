<?php
        session_start();
     //   $pagetitle="login";
              include 'connect.php';
              
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $name=$_POST["fq_name"];
            $type=$_POST["type"];
            //echo $type;
            $disc=$_POST["fq_Complaint"];
            
            $stmt=$con->prepare("INSERT INTO detail (name, type, discribtion,user )
            VALUES (?,?,?,?)");
            $stmt->execute(array($name,$type,$disc,$_SESSION['username']));
           
            
            
         //   header("location: Login.html");
          //  $row=$stmt->fetch();
            $count = $stmt->rowcount();
            
          //   echo 'asd'.$count;
          
            
            if($count > 0){
                
               header("location: index.html");
               exit();
                
            } 
        }
        
        
        
        ?>