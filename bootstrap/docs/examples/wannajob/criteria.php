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

    <script type="text/javascript">
    var i = 0;
    function deletedata()
    {
      skillinput(1);
    }
    function skillinput(flag)
    {
        if (flag == 1)
        {
          i++;
        }
        var text = '{ "jobs" : [' +
                      '{ "jobtitle":"Help Desk" , "payment":"200" },' +
                      '{ "jobtitle":"Cashier" , "payment":"100" },' +
					  '{ "jobtitle":"Sales" , "payment":"150" },' +
                      '{ "jobtitle":"" , "payment":"" } ]}'; 
        var obj = JSON.parse(text); 
        document.getElementById("skill").innerHTML = obj.jobs[i].jobtitle;
       if(i == obj.jobs.length-1)
       {
         document.getElementById("no").disabled = true; 
         document.getElementById("yes").disabled = true; 
       }
    }
    </script>
  </head>
<!-- NAVBAR
================================================== -->
  <body onload="skillinput(0)">
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
        <h1>Suggestion Work</h1>
      </div>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
    <div class="col-md-12 col-sm-12">
      <form class="form-horizontal" role="form" action="map.php" method="POST">
                <div class="form-group">
                    <div class="col-sm-1"> 
                     <button type="button" id="yes" class="btn btn-primary btn-block" onclick="deletedata()">Yes</button>
                    </div>                  
                    <div class="col-sm-9">
                          <textarea autocomplete="off" class="form-control" id="skill" name="skill" value="Help Desk Operator" data-items="8" disabled="true">
                          </textarea>

                    </div>
                    <div class="col-sm-1"> 
                     <button type="button" id = "no" class="btn btn-primary btn-block" onclick="deletedata()">No</button>
                    </div>  
                </div> <!-- /.form-group -->
               
               <div class="form-group">
                <div class="col-sm-4">
                </div>
                    <div class="col-sm-3">
                        <a href="map.php"><button type="button" class="btn btn-primary btn-block">Submit</button></a>
                    </div>
                     <div class="col-sm-4">
                </div>  
                </div>
                
            </form> <!-- /form -->

      <hr class="featurette-divider">
      </div>
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
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
<script type="text/javascript">
$(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
});
</script>
<?php
  $data = $_SESSION['skill'];
?>

