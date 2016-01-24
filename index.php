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
    <link rel="stylesheet" href="./css/styles/indexstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    

  </head>
  <body>
    <?php
      require_once("view_components/navbar.php");
    ?>


    <div id="bodyContent">

      <script type="text/javascript" src="./scripts/js/jssor.slider.mini.js"></script>
        <!-- use jssor.slider.debug.js instead for debug -->
        <script>
            jQuery(document).ready(function ($) {
                
                var jssor_1_SlideshowTransitions = [
                  {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                  {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
                ];
                
                var jssor_1_options = {
                  $AutoPlay: true,
                  $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                  },
                  $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                  },
                  $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                  },
                  $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $Cols: 1,
                    $Align: 0
                  }
                };
                
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                
                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 900);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>

        <style>
            
            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            body{
              margin-bottom: 0px;
            }


            .jssorb01 {
                position: absolute;
            }
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #000 1px solid;
            }
            .jssorb01 div { background-color: gray; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
            .jssorb01 .av { background-color: #fff; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }

            /* jssor slider thumbnail navigator skin 09 css */
            
            .jssort09-600-45 .p {
                position: absolute;
                top: 0;
                left: 0;
                width: 900px;
                height: 45px;
            }
            
            .jssort09-600-45 .t {
                font-family: verdana;
                font-weight: normal;
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                color:#fff;
                line-height: 45px;
                font-size: 20px;
                padding-left: 10px;
            }
            
        </style>


        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 900px; height: 450px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 900px; height: 450px; overflow: hidden;">
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="./css/images/img1.jpg" />
                    <div data-u="thumb">This is a test link! <a href="http://localhost/HackArizona/issue_view.php">Click here!</a></div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="./css/images/img2.jpg" />
                    <div data-u="thumb">Check out this <a href="http://localhost/HackArizona/issue_view.php">page!</a></div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="./css/images/img4.jpg" />
                    <div data-u="thumb">Take a look into <a href="http://localhost/HackArizona/issue_view.php">this.</a> You might be interested in it!</div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="./css/images/img5.jpg" />
                    <div data-u="thumb">Fix this city today! <a href="http://localhost/HackArizona/issue_view.php">Click here!</a></div>
                </div>
            </div>
            <!-- Thumbnail Navigator -->
            <div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:900px;height:45px;text-align:center;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=40.0); opacity:0.4;"></div>
                <!-- Thumbnail Item Skin Begin -->
                <div data-u="slides" style="cursor: default;">
                    <div data-u="prototype" class="p">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
                <div data-u="prototype" style="width:12px;height:12px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
        </div>

        <!-- #endregion Jssor Slider End -->

      <!-- START COLUMN BUTTONS -->

      <h2 id="popularIssues">
          Popular Issues
      </h2>

      <div id="buttonContainer">
        
        <div class="row">
          <div id="localIssues" class="col-sm-4">
      	    <a type="button" class="btn btn-danger btn-block">Local</a>
            <span id="localCaret" style="color: #d9534f; font-size: 20pt; display: none;" class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
          </div>
          <div id="stateIssues" class="col-sm-4">
             <a type="button" class="btn btn-default btn-block">State</a>		
             <span id="stateCaret" style="color: black; font-size: 20pt; display: none;" class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
          </div>
          <div id="nationalIssues" class="col-sm-4">
            <a type="button" class="btn btn-primary btn-block">National</a>
            <span id="nationalCaret" style="color: #337ab7; font-size: 20pt; display: none;" class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
          </div>
        </div>
      </div>
      <!-- END COLUMN BUTTONS -->

      <div id="popularIssuesContent">

        <div id="popularIssues">
          <a href="http://localhost/HackArizona/issue_view.php">
            <div class="issue">
              <h3 id="issueTitle1"></h3>
              <img id="imgThumb1">
            </div>
          </a>

          <a href="http://localhost/HackArizona/issue_view.php">
            <div class="issue">
              <h3 id="issueTitle2"></h3>
              <img id="imgThumb2">
            </div>
          </a>
          <a href="http://localhost/HackArizona/issue_view.php">
            <div class="issue">
              <h3 id="issueTitle3"></h3>
              <img id="imgThumb3">
            </div>
          </a>
        </div>

        <a id="seeAllIssues" href="#" type="button" class="btn btn-info btn-block"><span class="glyphicon glyphicon-edit"></span>See All Issues</a>

      </div>

    </div>

    <script>
      $(document).ready(function() {

        ajaxGetPopularIssues("national");

        $("#nationalIssues").click(function() {
          ajaxGetPopularIssues("national");
        });

        $("#stateIssues").click(function() {
          ajaxGetPopularIssues("state");
        });

        $("#localIssues").click(function() {
          ajaxGetPopularIssues("local");
        });

        function ajaxGetPopularIssues(scope) {
          $.post("./scripts/php/controller.php",
          {
            getPopularIssues: "",
            scope: scope
          },
          function(data, status){
            if(status == "success") {
              var issuesArray = JSON.parse(data);

              $("#issueTitle1").text(issuesArray[0]["issue_name"]);
              $("#imgThumb1").attr("src", issuesArray[0]["picture"]);
              $("#issueTitle2").text(issuesArray[1]["issue_name"]);
              $("#imgThumb2").attr("src", issuesArray[1]["picture"]);
              $("#issueTitle3").text(issuesArray[2]["issue_name"]);
              $("#imgThumb3").attr("src", issuesArray[2]["picture"]);
            }
          });
        }
      });

        

        /*
        var changeBoolean = 0;

        var randomIssues = ["TayTay Today","LETS BUILD A WALL","Support Local PlayGround","Local Pothole", 'Dog "Lost"',"Pet shark on the loose", "President Obama...", "Stick In Road", "Mountain Currently Exploding..."];
        var randomURLforIssues = ["./css/images/01.jpg","./css/images/02.jpg","./css/images/05.jpg","./css/images/06.jpg", "./css/images/07.jpg", "./css/images/08.jpg", "./css/images/09.jpg","./css/images/10.jpg","./css/images/11.jpg"];

        function resetPopular() {

          var arrLength = randomIssues.length;
          var random1 = Math.floor(Math.random() * arrLength);
          var random2 = Math.floor(Math.random() * arrLength);  
          while (random2 == random1) {
            random2 = Math.floor(Math.random() * arrLength);  
          }
          var random3 = Math.floor(Math.random() * arrLength);   
          while (random3 == random2 || random3 == random1) {
            random3 = Math.floor(Math.random() * arrLength);  
          }

          $("#issueTitle1").text(randomIssues[random1]);
          $("#imgThumb1").attr("src", randomURLforIssues[random1]);
          $("#issueTitle2").text(randomIssues[random2]);
          $("#imgThumb2").attr("src", randomURLforIssues[random2]);
          $("#issueTitle3").text(randomIssues[random3]);
          $("#imgThumb3").attr("src", randomURLforIssues[random3]);

        }
        resetPopular();

        setInterval(function() {
            if (changeBoolean == 0) {
              resetPopular();
            }
        },10000);


        $("#stateIssues").click(function() {
          changeBoolean = 1;
          changeShowAll();
          resetPopular();
          $("#popularIssuesContent").css("margin-top", "-25px");
          $("#seeAllIssues").addClass("btn-success");
          $("#stateCaret").css("display", "");
          $(".issue").css("border", "3px solid black");


        });

        $("#nationalIssues").click(function() {
          changeBoolean = 1;
          changeShowAll();
          resetPopular();
          $("#popularIssuesContent").css("margin-top", "-25px");
          $("#seeAllIssues").addClass("btn-primary");
          $("#nationalCaret").css("display", "");
          $(".issue").css("border", "3px solid #337ab7");
        });

        $("#localIssues").click(function() {
          changeBoolean = 1;
          changeShowAll();
          resetPopular();
          $("#popularIssuesContent").css("margin-top", "-25px");
          $("#seeAllIssues").addClass("btn-danger");
          $("#localCaret").css("display", "");
          $(".issue").css("border", "3px solid #d9534f");
        });

      });




      function changeShowAll() {
        $("#localCaret").css("display", "none");
        $("#stateCaret").css("display", "none");
        $("#nationalCaret").css("display", "none");
        $("#seeAllIssues").removeClass("btn-success");
        $("#seeAllIssues").removeClass("btn-info");
        $("#seeAllIssues").removeClass("btn-primary");
        $("#seeAllIssues").removeClass("btn-danger");
      }*/

    </script>

<?php
      require_once("view_components/footbar.php");
    ?>

  </body>
</html>