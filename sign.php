<?php
error_reporting(0);

$username=$_POST['username'];
$contact=$_POST['contact'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];

echo("Your username is $username"."<br><br>");
echo("Your Phone Number is $contact"."<br><br>");
echo("Your Password1 is $password1"."<br><br>");
echo("Your Password2 is $password2"."<br><br>");

$path = mysqli_connect("localhost","id14852472_datastore","Pw08vuNl@15[d)oy","id14852472_bumbs");


$char=strcmp($password1,$password2);

if ($char != '0') 
   {
	echo ("Password Not Matched");
	header('location:sign_up.html');
   }
 else
  {
 	$select = "SELECT * FROM tb1 WHERE username='$username' OR Contact='$contact'";

 	$ans = ($path->query($select));
 
    $row = mysqli_num_rows($ans);

     if ($row > 0) 
      {
    	echo("username Or Contact Number Already Exists");
      }
      else
      {
       $insert = "INSERT INTO tb1 SET username='$username',Contact='$contact',password='$password1'";

      $path->query($insert);
      echo ("sign_up Sucessfull");
      }


  }

  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>credentials</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      input[type=text], select {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid rgb(122, 119, 119);
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type=password], select {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid rgb(122, 119, 119);
        border-radius: 4px;
        box-sizing: border-box;
      }
      
      input[type=submit] {
        width: 30%;
        background-color: #100dbb;
        color: rgb(95, 93, 93);
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      input[type=submit]:hover {
        background-color: #6a6a81;
      }
      
      div {
        border-radius: 5px;
        background-color:#0005;
        padding: 0px;
      }
      </style>
</head>
<body>
  <div class="container-fluid">
    <form method="POST" action="ind_val.php">
   <div id="main">
        <nav>
            <img src="image/logo.png" width="35" height="35" style="padding-top:10px;padding-left:10px ;" >
            <a style="color: rgb(255, 38, 0);">UTS</a>
            <a style="color: rgb(255, 38, 0);">IR Unreserved Ticketing</a>
        </nav><br>
       <table>
           <tr>
              <td><label for="fname">USER Name</label></td>
              <td><input type="text" id="fname" name="username" placeholder="user name"></td>
           </tr>
           <tr>
               <td><label for="lname">password</label></td>
               <td><input type="text" id="lname" name="password" placeholder="Your password"></td>
           </tr>
        </table>
            <center><input type="submit" name="button" value="LOGIN"></center>
                  <img src="image/train3.jpg" height="250" width="300" class="im">
        </div>
      </form>

  </div>      

</body>
</html>

