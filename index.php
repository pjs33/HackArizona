<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lobbying Website!</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles/indexstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    

  </head>
  <body>
    <?php
      require_once("view_components/navbar.php");
    ?>


<div id="bodyContent">

  <!-- START CAROUSEL -->
  <div id="sliderContainer">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 900px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="https://www.google.com/" target="_blank"><img src="./css/images/img1.jpg" alt="img1" width="460" height="345"></a>
        </div>

        <div class="item">
          <img src="./css/images/img2.jpg" alt="img2" width="460" height="345">
        </div>
      
        <div class="item">
          <img src="./css/images/img3.jpg" alt="img3" width="460" height="345">
        </div>

        <div class="item">
          <img src="./css/images/img4.jpg" alt="img4" width="460" height="345">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- END CAROUSEL -->

  <!-- START COLUMN BUTTONS -->

  <div id="buttonContainer">
    
    <div class="row">
      <div class="col-sm-4">
  	    <a href="#" type="button" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-edit"></span> Local</a>
      </div>
      <div class="col-sm-4">
         <a href="#" type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit"></span> State</a>		
      </div>
      <div class="col-sm-4">
        <a href="#" type="button" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-edit"></span> National</a>
      </div>
    </div>
  </div>
  <!-- END COLUMN BUTTONS -->
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>