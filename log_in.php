<?php
session_start();
$db =mysqli_connect('localhost:3307','root','','amit');

$log=mysqli_query($db,"SELECT * FROM login");
     $us=$_POST['userid'];
      $ps=$_POST['password'];
      
      while($row=mysqli_fetch_array($log)) {
          if($us==$row['username']){
                    if($ps==$row['psword']){ 
                        $_SESSION['id']=$row['id'];
                        header("Location:blog.php");
          }
          else{
               echo '<script>alert("INCORRECT PASSWORD")</script>';
          }
        }       
          
    
        
}?>