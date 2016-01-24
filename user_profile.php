<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Lobbyists</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
    /*
    $(document).ready(function() {
      var peopleDonating = Math.floor(Math.random() * 9999) + 1;
      var moneyRaised = Math.floor(Math.random() * 9999) + 1;
      var remainingGoal = Math.floor(Math.random() * 9999) + 1;

      while (remainingGoal > moneyRaised) {
        var remainingGoal = Math.floor(Math.random() * 9999) + 1;        
      }

      $("#peopleDonating").text(peopleDonating);
      $("#moneyRaised").text("$"+ moneyRaised);
      $("#remainingGoal").text("$"+ remainingGoal);

      var total = moneyRaised+remainingGoal;
      var difference = (moneyRaised / total)*100;
      var temp = difference.toString();
      if (difference > 10) {
        var percentage = temp.substring(0, 2);
      } else {
        var percentage = temp.substring(0, 1);
      }
      

      $("#donationsTotal").css("width", difference+"%");
      $("#donationsTotal").text("Donations "+percentage+"% Complete.");

    });
    */
    </script>


    
    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
        height: 300px;
    }

    #bodyContent {
      width: 960px;
      margin-left: auto;
      margin-right: auto;
      height: 800px;
      box-shadow: 0 0 10px #888888;
      border-radius: 0px 0px 10px 10px;
      background: white;
      text-align: center;
      padding-top: 30px;
    }

    body {
      background: #f2f2f2;
    }

    #issue-name {
      margin: 0px;
      margin-bottom: 20px;
    } 

    #topInfo, .progress {
      width: 900px;
    }
    #mainInfo {
      overflow: auto;
      font-size: 16pt;
    }
    #pictureContainer, #image_main {
      width: 450px;
      float: left;
      margin-left: 10px;
    }

    #donationContainer {
      width: 430px;
      float: right;
    }

    #textInfo {
      margin-top: 15px;
    }
    #peopleDonating, #moneyRaised, #remainingGoal {
      font-size: 30pt;
      color: #5cb85c;
      width: 380px;
      margin-left: auto;
      margin-right: auto;
    }
    #start_donation {
      margin: 30px 50px 20px 50px;
      width: 250px;
      height: 50px;
    }
    #facebookButton, #twitterButton {
      width: 200px;
    }
    #facebookButton {
      margin-left: 10px;
    }
    
    .textInfo {
      width:100%
    
    }
    
   #text-para{
      width:50%;
      float:left;
      padding: 10px;
   }
   #picture{
      width:50%;
      float:right;
      
   }


  </style>

  </head>
  <body>
    
    <?php
      require_once("view_components/navbar.php");
    ?>

    <div id="bodyContent">
      <h1 id="issue-name">User Profile</h1>

          <div class="textInfo">
            
            <div id="text-para"> 
                
            </div>
             
            <div id="picture">
              <img src="https://lh5.ggpht.com/-y_80LZ2D6hbQrnhDyLjMYocM4ZDr0H06IFj5QPiof39wovHPASWp3oUnXMgZw0X5vo=w300" style="width:404px;height:390px;">
             
             </div>
            <br>
            
            <iframe width="560" height="315" src="https://www.youtube.com/embed/aTbtKRdYbYo" frameborder="0" allowfullscreen></iframe>
        
        </div> <!--topInfo end-->
      </div> <!--bodyContent end-->
       <?php
      require_once("view_components/footbar.php");
    ?>
      

  </body>
</html>