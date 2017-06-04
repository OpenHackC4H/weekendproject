<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>JobHunter</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="justified-nav.css" rel="stylesheet">
    	   
   

    <style>
       #map {
        height: 600px;
        width: 100%;
       }
        @import url(http://fonts.googleapis.com/css?family=Roboto:400,300);
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

        

        .range {
          display: table;
          position: relative;
          height: 25px;
          margin-top: 20px;
          background-color: rgb(245, 245, 245);
          border-radius: 4px;
          -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
          cursor: pointer;
        }

        .range input[type="range"] {
          -webkit-appearance: none !important;
          -moz-appearance: none !important;
          -ms-appearance: none !important;
          -o-appearance: none !important;
          appearance: none !important;

          display: table-cell;
          width: 100%;
          background-color: transparent;
          height: 25px;
          cursor: pointer;
        }
        .range input[type="range"]::-webkit-slider-thumb {
          -webkit-appearance: none !important;
          -moz-appearance: none !important;
          -ms-appearance: none !important;
          -o-appearance: none !important;
          appearance: none !important;

          width: 11px;
          height: 25px;
          color: rgb(255, 255, 255);
          text-align: center;
          white-space: nowrap;
          vertical-align: baseline;
          border-radius: 0px;
          background-color: rgb(153, 153, 153);
        }

        .range input[type="range"]::-moz-slider-thumb {
          -webkit-appearance: none !important;
          -moz-appearance: none !important;
          -ms-appearance: none !important;
          -o-appearance: none !important;
          appearance: none !important;
          
          width: 11px;
          height: 25px;
          color: rgb(255, 255, 255);
          text-align: center;
          white-space: nowrap;
          vertical-align: baseline;
          border-radius: 0px;
          background-color: rgb(153, 153, 153);
        }

        .range output {
          display: table-cell;
          padding: 3px 5px 2px;
          min-width: 40px;
          color: rgb(255, 255, 255);
          background-color: rgb(153, 153, 153);
          text-align: center;
          text-decoration: none;
          border-radius: 4px;
          border-bottom-left-radius: 0;
          border-top-left-radius: 0;
          width: 1%;
          white-space: nowrap;
          vertical-align: middle;

          -webkit-transition: all 0.5s ease;
          -moz-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          -ms-transition: all 0.5s ease;
          transition: all 0.5s ease;

          -webkit-user-select: none;
          -khtml-user-select: none;
          -moz-user-select: -moz-none;
          -o-user-select: none;
          user-select: none;
        }
        .range input[type="range"] {
          outline: none;
        }

        .range.range-primary input[type="range"]::-webkit-slider-thumb {
          background-color: rgb(66, 139, 202);
        }
        .range.range-primary input[type="range"]::-moz-slider-thumb {
          background-color: rgb(66, 139, 202);
        }
        .range.range-primary output {
          background-color: rgb(66, 139, 202);
        }
        .range.range-primary input[type="range"] {
          outline-color: rgb(66, 139, 202);
        }

        .range.range-success input[type="range"]::-webkit-slider-thumb {
          background-color: rgb(92, 184, 92);
        }
        .range.range-success input[type="range"]::-moz-slider-thumb {
          background-color: rgb(92, 184, 92);
        }
        .range.range-success output {
          background-color: rgb(92, 184, 92);
        }
        .range.range-success input[type="range"] {
          outline-color: rgb(92, 184, 92);
        }

        .range.range-info input[type="range"]::-webkit-slider-thumb {
          background-color: rgb(91, 192, 222);
        }
        .range.range-info input[type="range"]::-moz-slider-thumb {
          background-color: rgb(91, 192, 222);
        }
        .range.range-info output {
          background-color: rgb(91, 192, 222);
        }
        .range.range-info input[type="range"] {
          outline-color: rgb(91, 192, 222);
        }

        .range.range-warning input[type="range"]::-webkit-slider-thumb {
          background-color: rgb(240, 173, 78);
        }
        .range.range-warning input[type="range"]::-moz-slider-thumb {
          background-color: rgb(240, 173, 78);
        }
        .range.range-warning output {
          background-color: rgb(240, 173, 78);
        }
        .range.range-warning input[type="range"] {
          outline-color: rgb(240, 173, 78);
        }

        .range.range-danger input[type="range"]::-webkit-slider-thumb {
          background-color: rgb(217, 83, 79);
        }
        .range.range-danger input[type="range"]::-moz-slider-thumb {
          background-color: rgb(217, 83, 79);
        }
        .range.range-danger output {
          background-color: rgb(217, 83, 79);
        }
        .range.range-danger input[type="range"] {
          outline-color: rgb(217, 83, 79);
        }

    </style>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-ijkavp1CCFG2C5Qo46b5RG7wuOuvpt4">
  </script>
  <script>
   var map, infoWindow;
      function updateSlider(slideAmount)
      {
        var sliderDiv = document.getElementById("range");
        sliderDiv.innerHTML = slideAmount;
        initMap(slideAmount);
      }
      function initMap(slideAmount) {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });
        infoWindow = new google.maps.InfoWindow;
        // Try HTML5 geolocation.
   
    var lats,lngs;
    var locations = [
                ['Operator',59.859120,17.633264],
                ['Sales Associate',59.856825,17.636997],
                ['Graphic Designer',59.863053,17.626097],
                ['VP Accounting',59.866457,17.648499],
                ['Business Systems Development Analyst',59.859002,17.647512],
                ['Information Systems Manager',59.862837,17.645280],
                ['Account Representative IV',59.872623,17.642142],
                ['Geological Engineer',59.868002,17.631408],
                ['Technical Writer',59.859082,17.651118],
                ['Senior Cost Accountant',59.850578,17.632935],
                ['Product Engineer',59.846372,17.654773],
                ['Biostatistician III',59.843559,17.633861],
                ['Help Desk Operator',59.844768,17.664489],
                ['Chemical Engineer',59.864588,17.634558],
                ['Accountant II',59.862778,17.647196],
                ['Sales',59.859514,17.628829],
                ['GIS Technical Architect',59.876016,17.641853],
                ['Librarian',59.873905,17.639064],
                ['Director of Sales',59.872990,17.636253],
                ['Software Engineer II',59.876232,17.631618]
                ];
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
      lats = position.coords.latitude;
      lngs = position.coords.longitude;
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };      
            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location');
            infoWindow.open(map);
            map.setCenter(pos);
              
       //var distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(locations[0][1], locations[0][2]), new google.maps.LatLng(locations[1][1], locations[1][2]));  
        for (i = 0; i < locations.length; i++) {  
        var origin1 = new google.maps.LatLng(lats, lngs);
        var destinationB = new google.maps.LatLng(locations[i][1],locations[i][2]);

        var _eQuatorialEarthRadius = 6378.1370;
        var _d2r = (Math.PI / 180.0);
        function HaversineInM(lat1, long1, lat2, long2)
        {
          return (1000.0 * HaversineInKM(lat1, long1, lat2, long2));
        }

        function HaversineInKM(lat1, long1, lat2, long2)
        {
          var dlong = (long2 - long1) * _d2r;
          
          var dlat = (lat2 - lat1) * _d2r;
          var a = Math.pow(Math.sin(dlat / 2.0), 2.0) + Math.cos(lat1 * _d2r) * Math.cos(lat2 * _d2r) * Math.pow(Math.sin(dlong / 2.0), 2.0);
          var c = 2.0 * Math.atan2(Math.sqrt(a), Math.sqrt(1.0 - a));
          var d = _eQuatorialEarthRadius * c;

          return d;
        }

        var result1 = HaversineInKM(lats, lngs,locations[i][1], locations[i][2]);
        if(result1 < slideAmount)
        {
          var marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1],locations[i][2]),
            title:locations[i][0]
          });
          marker.setMap(map);
        }
       }
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });


       
          
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

      }
      


      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

    </script>
   
  </head>
<!-- NAVBAR
================================================== -->
  <body onload="initMap(50)">
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">JobHunter</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="Jobseeker.php">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
               <form id="signin" name = "loginform" class="navbar-form navbar-right" role="form" onsubmit="validateForm()" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="email" id="inputEmail" class="form-control"  placeholder="Email address" required autofocus>                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>                                        
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                   </form>
            </div>
          </div>
        </nav>

      </div>
    </div>


      <div class="jumbotron">
        <h1>Job Maps</h1>
      </div>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
     <div class="col-md-12 col-sm-12">
     <div class="col-md-1">
     <h3>Distance</h3>
     </div>
     <div class="col-md-6">
          <div class="range">
            <input type="range" id="slider" name="range" min="1" max="100" value="50" onchange="updateSlider(this.value)">
            <output id="range">50</output>
          </div>
        </div>
     </div>

  <div id="map" class="col-md-12 col-sm-12">
  </div>
  



      </div>
      <!-- /END THE FEATURETTES -->

      <br>
      <br>
      <!-- FOOTER -->
      <footer>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
