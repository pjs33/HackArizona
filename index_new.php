<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/favicon.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Lobbyists</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles/indexstyles_new.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="./scripts/js/pullPopular.js" type="text/javascript"></script>
    

  </head>
  <body>
    <?php
      require_once("view_components/navbar_new.php");
    ?>


    <div id="bodyContent">

      <!-- START COLUMN BUTTONS -->
      <div id="buttonContainer">
        <div class="row">
          <div id="localIssues" class="col-sm-4">
      	    <a type="button" style="font-size: 14pt;" class="btn btn-primary btn-block">Local</a>
          </div>
          <div id="stateIssues" class="col-sm-4">
             <a type="button" style="font-size: 14pt;" class="btn btn-primary btn-block">State</a>
          </div>
          <div id="nationalIssues" class="col-sm-4">
            <a type="button" style="font-size: 14pt;" class="btn btn-primary btn-block">National</a>
          </div>
        </div>
      </div>
      <!-- END COLUMN BUTTONS -->

      <div id="popularIssuesContent">

        <div id="popularIssues">
          <a id="issueLink1" href="http://localhost/HackArizona/issue_view.php">
            <div class="issue">
              <h3 id="issueTitle1" style="font-size: 15pt;"></h3>
              <img id="imgThumb1" class="img-circle" alt="imgThumb1" width="200" height="200">
            </div>
          </a>

          <a id="issueLink2" href="http://localhost/HackArizona/issue_view.php">
            <div class="issue">
              <h3 id="issueTitle2" style="font-size: 15pt;"></h3>
              <img id="imgThumb2" class="img-circle" alt="imgThumb2" width="200" height="200">
            </div>
          </a>
          <a id="issueLink3" href="http://localhost/HackArizona/issue_view.php">
            <div class="issue">
              <h3 id="issueTitle3" style="font-size: 15pt;"></h3>
              <img id="imgThumb3" class="img-circle" alt="imgThumb3" width="200" height="200">
            </div>
          </a>
        </div>

        <a id="seeAllIssues" href="#" type="button" class="btn btn-info btn-block">See All Issues</a>

      </div>

    </div>

<?php
      require_once("view_components/footbar.php");
    ?>

  </body>
</html>