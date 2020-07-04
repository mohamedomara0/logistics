 <?php
        include 'connect.php';
         
        
       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $id = $_POST["userid"];
            $user = $_POST["username"];
            $email = $_POST["email"];
            $nationalid = $_POST["nationalid"];
            $stmt = $con->prepare("update student set username=? ,email=?,nationalid=? where id=?");
            $stmt->execute(array($user, $email, $nationalid,  $id));
            $count = $stmt->rowcount();
            
            if($count > 0){
               header("location: edite.php?id=".$id);
               exit();            
            }else{
                header("location: edite.php?id=".$id);
               exit();             
            }
            
            
        }
   
        
        ?>