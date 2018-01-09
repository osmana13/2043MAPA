<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>

  


<doctype html>
<html>
    <head>
    
        <link href="css/bootstrap.min.css">
          <link href="https://fonts.googleapis.com/css?family=Codystar" rel="stylesheet">
        <link href="css/style1.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="about.html">
        <link href="contact.html">
    </head>
    <body>
    
    
        
     <div class="wrapper">
     <h1 style="color:gray">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></h1>     
    <div class="line"></div>
  
    <div class="circle"><a href="home.php" style="color:white;text-decoration:none;">
        HOME </a>     
    </div>
          
     <div class="circle3"><a href="about.php" style="color:white;text-decoration:none;">
        ABOUT </a>     
    </div>   
    <div class="circle4"><a href="team.php" style="color:white;text-decoration:none;">
        TEAM </a>     
    </div>     
    <div class="circle5"><a href="map.php" style="color:white;text-decoration:none;">
        MAP </a>     
    </div>     
    <div class="circle5"><a href="contact.php" style="color:white;text-decoration:none;">
        CONTACT </a>     
    </div>       
    <div class="circle6"><a href="logout.php" style="color:white;text-decoration:none;">
        LOGOUT </a>     
    </div>
       
   
         
</div>   
        
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.1.1.min%20(1).js"></script>
    <script src="js/bootstrap.min.js"></script>

        
    </body>
    
    
    </html>
</doctype>