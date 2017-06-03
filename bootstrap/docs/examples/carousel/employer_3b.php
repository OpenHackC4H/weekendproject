<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>WandaJob</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
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
              <a class="navbar-brand" href="#">WandaJob</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
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
               
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<!-- <center> -->
    <div class="container marketing">
    <div class="row">
        <div class ="col-lg-12" height="100px">

        <!-- add enters -->
          <br></br>
          <br></br>
        
        </div>
        <div class = "col-lg-12">  

                   <h1>Job Specification</h1>
                   <br></br>

                <form class = "from-horizontal">
                  
                  <div class="form-group">
                      <label for="inputJobDescription" class= "control-label col-xs-2">Job Description</label>
                      <div class="col-xs-10">
                        <!-- <input type="companyProfile" class="form-control" id="inputCompanyProfile" placeholder="Company Profile"> -->
                        <textarea rows="3" class="form-control" id="inputCompanyProfile" placeholder="Job Description"></textarea>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="inputTimeLength" class= "control-label col-xs-2">Time Length</label>
                      <div class="col-xs-10">
                        <input type="TimeLength" class="form-control" id="inputTimeLength" placeholder="Hours">
                      </div>
                  </div>
                  

                  <div class="form-group">
                      <label for="inputAppDeadline" class= "control-label col-xs-2">Application Deadline</label>
                      <div class="col-xs-10">
                        <input type="AppDeadline" class="form-control" id="inputAppDeadline" placeholder="Application Deadline">
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="inputSalary" class= "control-label col-xs-2">Salary</label>
                      <div class="col-xs-10">
                        <input type="Salary" class="form-control" id="inputSalary" placeholder="Salary">
                      </div>
                  </div>
                  
                </form>


                <!-- Salary slider -->
                <!-- <label for="inputTimeLength" class= "control-label col-xs-2">Salary Range</label>
                <div class="col-xs-6">
                  <div class="range range-success">
                    <input type="range" name="range" min="100" max="30000" value="15000" onchange="rangeSuccess.value=value">
                    <output id="rangeSuccess">15000</output>
                    
                  </div>
                </div>   -->
                
              <!-- <p>Every people in the world have right to get their job</p> -->
              
        </div>
     </div>
     <!-- add enters -->
          <br>
          </br>
          <br>
          </br>
      <!-- FOOTER -->
      <centar>
        <footer>
          <p>&copy; 2016 WannaJob, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
      </centar>

    </div>
<!-- </center> -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
