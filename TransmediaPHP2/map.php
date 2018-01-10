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
     <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> <!! here i have used google fonts >
    <style>
      .map {
        height: 700px;
        width: 1300px;
      }
    </style>
    <script src="https://openlayers.org/en/v4.4.2/build/ol.js" type="text/javascript"></script>

    <script src="https://openlayers.org/en/v4.4.2/examples/resources/mapbox-streets-v6-style.js"></script>
    <script src="https://openlayers.org/en/v4.4.2/build/ol.js"></script>



 <link rel="stylesheet" href="https://openlayers.org/en/v4.4.2/css/ol.css" type="text/css">
    <title>HAVEN</title> <!! got the theme from bootstrap>

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
    
    <p> current coventry locations we are based.</p>
    
<br>
   <body>
    <div id="map" class="map"></div>
    <script type="text/javascript">
      var coventry = [-1.501, 52.406]; // longitude first, then latitude
      // since we are using OSM, we have to transform the coordinates...
      var coventryWebMercator = ol.proj.fromLonLat(coventry);
// some docs here https://openlayers.org/en/latest/examples/icon-color.html
      var cov = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-1.504, 52.406]))
      });
     var cov2 = new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([-1.501, 52.406]))
      });
        
   
        
        
      cov.setStyle(new ol.style.Style({
        image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
//          color: '#8959A8',
          src: 'images/2.jpg' }))  }));

          cov2.setStyle(new ol.style.Style({
            image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
        //          color: '#8959A8',
              src: 'images/2.jpg' }))  }));
        

      var vectorSource = new ol.source.Vector({
        features: [cov, cov2]
      });
      var vectorLayer = new ol.layer.Vector({
        source: vectorSource
      });
      
      var rasterLayer = new ol.layer.Tile({
        source: new ol.source.TileJSON({
        url: 'https://api.tiles.mapbox.com/v3/mapbox.geography-class.json?secure',
      })
    });
var map = new ol.Map({
  layers: [
    new ol.layer.Tile({
      source: new ol.source.OSM()
    }), vectorLayer
  ],
  target: 'map',
  view: new ol.View({
    center: coventryWebMercator,
    zoom: 15
  })
});
    </script>
  </body>

    
    
        
    <!-- Footer -->
    <footer>
            <p>©Copyright Ayan Osman</p>
    </footer>
    
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.1.1.min%20(1).js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>

</html>



