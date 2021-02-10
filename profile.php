<?php 
session_start();
if(!(isset($_SESSION['username'])))
{
    header('Location: index.html');
}
?>
<html>
    <head>
        <title>UTS APP</title>

        <link rel="stylesheet" type="text/css" href="css/style.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    <div id="main">
        <nav>
        <img src="image/logo.png" width="35" height="35" style="padding-top:10px;padding-left:10px ;" >
        <a style="color: rgb(255, 38, 0);">UTS</a>
        <a style="color: rgb(255, 38, 0);">IR Unreserved Ticketing</a>&nbsp&nbsp&nbsp
        <?php 
        if($_SESSION['username']!=NULL) 
            {  
               echo "Hi!! ".$_SESSION['username']; 
        } 

    ?>
    </nav>
    <center>
     <button  class="button" style="vertical-align:middle" onclick="window.location.href = 'book_ticket.html';">
        <span>
            <table>
                 <tr class="full"><th><i class='far fa-money-bill-alt' style='font-size:30px'></i></th><td class="tic">BOOK TICKET</td></tr>
            </table>
        </span>
    </button>
    </center>
    <center>
    <button class="button" style="vertical-align:middle"  onclick="window.location.href = 'cancel.html';">
        <span>
            <table>
                    <tr><th><img src="image/im-2.png" height="30" width="30" alt=""></th><td class="tic">CANCEL TICKET</td></tr>
            </table>
        </span>
    </button>
    </center>
    <center>
   <button class="button" style="vertical-align:middle"  onclick="window.location.href = 'cancel.html';">
    <span>
        <table>
            <tr><th><img src="image/im-3.png" height="30" width="30" alt=""></th><td class="tic">BOOKING HISTORY</td></tr>
        </table>
    </span>
   </button>
   </center>
   <center>
   <button class="button" style="vertical-align:middle"  onclick="window.location.href = 'rwallet.html';">
    <span>
       <table>
       <tr><th><img src="image/im-4.png" height="30" width="30" alt=""></th><td class="tic">R-WALLET</td></tr> 
     </table>
    </span>
   </button>
   </center>
   <center>
   <button class="button" style="vertical-align:middle"  onclick="window.location.href = 'userprofile.html';">
    <span>
        <table>
       <tr><th><img src="image/im-5.png" height="30" width="30" alt=""></th><td class="tic">PROFILE</td></tr>
      </table>
    </span>
   </button>
   </center>
   <center>
   <button class="button" style="vertical-align:middle"  onclick="window.location.href = 'cancel.html';">
    <span>
        <table>
        <tr><th><i class='fas fa-book-open' style='font-size:24px'></i></th><td class="tic">SHOW BOOKED TICKED</td></tr>
      </table>
    </span>
   </button>
   </center>
   <center>
   <button class="button" style="vertical-align:middle"  onclick="window.location.href = 'help.html';">
    <span>
       <table>
        <tr><th><img src="image/im-7.png" height="30" width="30" alt=""></th><td class="tic">HELP</td></tr>
      </table>
    </span>
   </button>
   </center>
   <center>
      <button class="button" style="vertical-align:middle"  onclick="window.location.href = 'logout.php';">
    <span>
       <table>
        <tr><th><img src="image/logout.png" height="30" width="30" alt=""></th><td class="tic">LOG OUT</td></tr>
      </table>
    </span>
   </button>
    </center>
   <center><img src="image/last.jpg" height="210" width="300" class="im"></center>
</div>

</body>
</html>
	   