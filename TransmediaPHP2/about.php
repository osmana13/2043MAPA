<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


    <title>HAVEN</title>

    
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style1.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
 
    
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
               <a class="navbar-brand page-scroll" href="#page-top"><img class="logo" src="images/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="home.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php">About</a>
                   
                    </li>
                    <li>
                        <a class="page-scroll" href="team.php">Team </a>
                    </li>
                
                    
                    <li>
                        <a class="page-scroll" href="map.php">Map </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.php">Contact </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php">Logout</a>
                    </li>    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <div class="banner" style="padding-bottom:50px;"> 
        <h1 style="text-align:center;"> HAVEN </h1>
<h3 style="text-align:center;">  WHAT IS HAVEN ABOUT? </h3>      
        
 <p style="text-align:center;"> 
With the risk of terrorism and disaster as prevalent as always, it can often be difficult to feel truly safe in todays society. In the case of such events, very few people will actually know what to do to have the best chance for survival. Because of this, as a group we wanted to create a platform that would allow people to better work together to ensure safety and security within their communities. ‘Haven’, our project came about because of these feelings. Haven is an application/ Web service designed to help people in need find help, whether through food, water, shelter, medical supplies or just someone to talk to
       
        </p> 
         </div>
    
    
    
    
    
     <!-- Footer -->
    <footer>
            <p>©Copyright Ayan Osman</p>
    </footer>
    

    </body>

</html>




