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
        color: white;
    } 
     
     </style>
   <body>
       <h1 align=center class=h1> SIGN UP</h1>
     <form action="registration.php" method="POST" align=center>
        <input type="text" class=in placeholder="first name"><br><br>
        <input type="text" class=in placeholder="lastname"><br> <br>
        <input type="text" name="name" class=in placeholder="Username"><br><br>
        <input type="password" name="password" class=in placeholder="Password"></br><br>
        <input type="submit" value="submit" class =button>
    </from>
   
   </body>
</html>