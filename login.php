<html>
 <head></head>
 <style>
     body{
         text-align: center;
         background-color: lightgrey;
       }
       .h1{
           color: black;
       }
       
       .in{
        outline: transparent;
        position: relative;
        left: 40px;
        padding: 10px;
        transform: translate(-10%, -10%);
        width: 400px;
        box-sizing: border-box;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .6);
        border-radius: 5px;
        border: transparent;
    }
       
    .button {
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
        background-color: white;
        border: transparent;
        border-radius: 5px;
        height: 40px;
        width: 150px;
        outline: none;
    }
    
    .button:hover {
        background-color: skyblue;
        color: black;
    } 
       
 </style>
   <body>
       <h1 align=center class=h1> Login Page </h1>
     <form action="log_in.php" method="POST" align=center class="form">
        <input type="text" name="userid" class="in" placeholder="Username"><br><br>
        <input type="password" name="password" class="in" placeholder="Password"></br><br>
        <input type="submit" value="Submit" class=button><br>
    </from>
    <a href="signup.php">create new account</a>
   </body>
</html>