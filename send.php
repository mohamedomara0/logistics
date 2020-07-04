<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connect.php';

            $id=$_GET["id"];

            $stmt = $con->prepare("select counter from detail where id = ?" );
            
            $stmt->execute(array($id));
            //$stmt->execute();
            $rows = $stmt->fetchAll();
             foreach ($rows as $row) {
            echo ''.$row['discribtion'];
           // $count = $stmt->rowcount();
                
//            if($count > 0){
//               header("location: admin.php");
//               exit();
//     //   print_r($row);
//                
//            }
            
            
            
             }
            
            ?>