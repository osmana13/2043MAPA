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


    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
              <a class="navbar-brand page-scroll" href="#page-top"><img class="logo" src="logo.png"></a>
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
  
   
    
    
      <div class="banner" style="margin-bottom:30px;">  <h1 style="text-align:center;"> CONTACT </h1></div>
    
    <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"> <!! got the contact template from bootstrap>
                    <h1 class="section-heading">
                    <h4 class="section-subheading text-muted">If you have any inquiries, feel free to contact the team and we will get back to you as soon as possible. </h4>
                </div>
            </div>
                <br>
            <div class="row">
                <div class="col-lg-12">

                            <form name="contactform" method="post" action="sendform.php">
                            <table width="500px">
                            <tr>
                             <td valign="top">
                              <label for="first_name">First Name *</label>
                             </td>
                             <td valign="top">
                              <input  type="text" name="first_name" maxlength="60" size="50">
                             </td>
                            </tr>
                            <tr>
                             <td valign="top">
                              <label for="last_name">Last Name </label>
                             </td>
                             <td valign="top">
                              <input  type="text" name="last_name" maxlength="60" size="50">
                             </td>
                            </tr>
                            <tr>
                             <td valign="top">
                              <label for="email">Email Address *</label>
                             </td>
                             <td valign="top">
                              <input  type="text" name="email" maxlength="80" size="50">
                             </td>
                            </tr>
                            <tr>
                             <td valign="top">
                              <label for="telephone">Telephone Number</label>
                             </td>
                             <td valign="top">
                              <input  type="text" name="telephone" maxlength="30" size="50">
                             </td>
                            </tr>
                            <tr>
                             <td valign="top">
                              <label for="comments">Comments *</label>
                             </td>
                             <td valign="top">
                              <textarea  name="comments" maxlength="1000" cols="50" rows="6"></textarea>
                             </td>
                            </tr>
                            <tr>
                             <td colspan="2" style="text-align:right">
                              <input type="submit" value="Submit">   
                             </td>
                            </tr>
                            </table>
                            </form>

                    
                   
                    
                   
                    </div>
                            </div>
    
     <!-- Footer -->
    <footer>
            <p>©Copyright Ayan Osman</p>
    </footer>
                            
 
           </body>
                    

</html>
                    






