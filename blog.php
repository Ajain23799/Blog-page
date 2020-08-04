<?php

session_start();
$db = mysqli_connect('localhost:3307', 'root', '', 'amit');

$query= "select * from blog";
$data =mysqli_query($db,$query);
$total=mysqli_num_rows($data);

?>
<html>

<head>
    <title>Blog</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="blog.css" rel="stylesheet">
    
</head>

<body>
    <h1 align="center">Our Blog</h1>
    <table width="1041" height="325" border="0"  align="center">

        <?php
            while($result=mysqli_fetch_assoc($data)){?>
        <tr>
            <td  class="title">
                
                    <b><u><?php echo $result['Title'] ?></u></b></br>   
            </td>
        </tr>
        <tr>   
        <td align="left" class="wrtn"><u>Written by:
            <?php echo $result['name']?></u><br></br>
        </td>
        </tr>
        <tr>
            <td class=img>
                <?php echo "<img src=".$result['image']." height=380 width=1100 />"?>
            </td>

        </tr>
        <tr>
            <td align="justify" class="detail">
                <?php echo  $result['detail']?>
            </td>
        </tr>
        <tr>
            <td align="right" colspan="2" class="date">
                <?php echo $result['date']?><br></br><br></br>
            </td>
        </tr>
              
        <?php 
  }   ?>
    </table>

    </body>

</html>