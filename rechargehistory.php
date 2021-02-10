<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING HISTORY</title>
</head>
<body>
<div id="main">
        <nav>
        <img src="image/logo.png" width="35" height="35" style="padding-top:10px;padding-left:10px ;" >
        <a style="color: rgb(255, 38, 0);">UTS</a>
        <a style="color: rgb(255, 38, 0);">IR Unreserved Ticketing</a>
        <ul>
            <li><a href="profile.php">HOME</a></li>
        </ul>
    </nav><br><br><br><br><br>
<?php
    
    $connect=mysqli_connect('localhost','root','','recharge');
    
    $sql="SELECT * FROM wallet";
    $result=mysqli_query($connect,$sql);
    
    $total=mysqli_num_rows($result);
    
    if($total!=0)
    {
       echo"<table><tr><th>AMMOUNT</th></tr>";
    
      while ($row=mysqli_fetch_assoc($result))
       {
        echo "<tr><th>".$row['Ammount']."</th></tr>";
      }
    
      echo"</table>";
    }
    
    else
    {
      echo("YOU DON'T HAVE ANY BOOK TICKET");
    }
    
?>
    </div>
</body>
</html>