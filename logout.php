<?php

session_start();
if(isset($_GET['logout']))
{
    session_destroy();
    header("Location:index.html");  
}
else
{
header("Location:index.html");
}
?>