<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        session_start();
        include 'connect.php';
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $user=$_POST["email"];
            $password=$_POST["password"];
            $hash =  sha1($password);
            $stmt=$con->prepare("select * from student where email=? and password=? and briority = 0 ");
            $stmt->execute(array($user,$hash));
            $count = $stmt->rowcount();
            if($count > 0){
               $_SESSION['username']=$user; 
               header("location: index.html");
               exit(); 
            }  else {
            $user=$_POST["email"];
            $password=$_POST["password"];
            $hash =  sha1($password);
            $stmt=$con->prepare("select * from student where email=? and password=? and  briority = 1");
            $stmt->execute(array($user,$hash));
            $count = $stmt->rowcount();
            if($count > 0){
               $_SESSION['username']=$user; 
               header("location: admin.php");
               exit(); 
            } else {
                
            $user=$_POST["email"];
            $password=$_POST["password"];
            $hash =  sha1($password);
            $stmt=$con->prepare("select * from student where email=? and password=? and  briority = 2");
            $stmt->execute(array($user,$hash));
            $count = $stmt->rowcount();
            if($count > 0){
               $_SESSION['username']=$user; 
               header("location: respons.php");
               exit(); 
            } else {  
                header("location: login.html");
            }
                
            }
                
            }
        }
        
        
        
        ?>
