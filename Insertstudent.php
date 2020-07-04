<?php
        session_start();
     //   $pagetitle="login";
              include 'connect.php';
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            
            $user=$_POST["username"];
            $password=$_POST["password"];
            $confirmpassword=$_POST["repassword"];
            $email=$_POST["email"];
            $nationalid=$_POST["nationalid"];
            
            if($user ==""||$password==""||$password!=$confirmpassword||$nationalid==""){
                 header("location: register.html");
                
            }  else {
                
                $stmt5=$con->prepare("select * from student where nationalid=?"); 
                 $stmt5->execute(array($nationalid));
                  $count5 = $stmt5->rowcount();
                if($count5 > 0){
                   
                    header("location: register.html");
                    
                } else {
                    
               
    
            $hash =  sha1($password);
            $stmt=$con->prepare("INSERT INTO student (username, password, email, nationalid )
            VALUES (?,?,?,?)");
            $stmt->execute(array($user,$hash,$email,$nationalid));
            
         //   header("location: Login.html");
          //  $row=$stmt->fetch();
            $count = $stmt->rowcount();
            
          //   echo 'asd'.$count;
          
            
            if($count > 0){
               header("location: Login.html");
               exit();
                
            } 
        }
        }
         }
        
        
        ?>