$(document).ready(function() {

        ajaxGetPopularIssues("national");

        $("#nationalIssues").click(function() {
          ajaxGetPopularIssues("national");
          //changeBoolean = 1;
          changeShowAll();
          //resetPopular();
          $("#seeAllIssues").addClass("btn-primary");
          $("#nationalCaret").css("display", "");
        });

        $("#stateIssues").click(function() {
          ajaxGetPopularIssues("state");
          //changeBoolean = 1;
          changeShowAll();
          //resetPopular();

          $("#seeAllIssues").addClass("btn-success");
          $("#stateCaret").css("display", "");
          $("#popularIssues").css("border-top", "15px solid #0c234b");
        });

        $("#localIssues").click(function() {
          ajaxGetPopularIssues("local");
          //changeBoolean = 1;
          changeShowAll();
          //resetPopular();
          $("#seeAllIssues").addClass("btn-danger");
          $("#localCaret").css("display", "");
          //$(".issue").css("border", "3px solid #d9534f");
          $("#popularIssues").css("border-top", "15px solid #0c234b");
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
              $("#issueLink1").attr("href", "http://localhost/HackArizona/issue_view.php?i=" + issuesArray[0]["issue_id"]);
              $("#issueLink2").attr("href", "http://localhost/HackArizona/issue_view.php?i=" + issuesArray[1]["issue_id"]);
              $("#issueLink3").attr("href", "http://localhost/HackArizona/issue_view.php?i=" + issuesArray[2]["issue_id"]);
            }
          });
        }


        function changeShowAll() {
          $("#localCaret").css("display", "none");
          $("#stateCaret").css("display", "none");
          $("#nationalCaret").css("display", "none");
          $("#seeAllIssues").removeClass("btn-success");
          $("#seeAllIssues").removeClass("btn-info");
          $("#seeAllIssues").removeClass("btn-primary");
          $("#seeAllIssues").removeClass("btn-danger");
        }

        $("#nationalIssues").click();
      });