<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="author" content="Lukas Yeung">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="resources/images/icon.png" type="image/png">

    <title>Pilot Math | Reciprocal Heading</title>
</head>

<?php
$random_heading = rand(1,360);
$solution = ($random_heading + 179) % 360 + 1;
?>

<body>
    
    <div class="bg-img">
        <div id="page-container">
            <div id="content-wrap">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-dark">
                        <?php include ("includes/header.php"); ?>
                    </nav>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                                <div class="mt-5 border-slim transparent-background">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a class="btn btn-secondary btn-block" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-secondary btn-block" href="reciprocal-heading-explanation.php">How To <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 border-slim transparent-background">
                                    <div class="border-slim row m-1">
                                        <div class="center-medium text-center">
                                            <h3>Reciprocal Heading</h3>
                                        </div>
                                    </div>
                                    <div class="border-slim row m-1">
                                        <div class="center-small text-center">
                                            <h4>Task:</h4>
                                        </div>
                                        <div class="center-medium text-center">
                                            <h5>Calculate the reciprocal heading for the following heading</h5>
                                        </div>
                                    </div>
                                    <div class="border-slim row m-1">
                                        <div class="center-medium">
                                            <div class="text-center">
                                                <h2><?=$random_heading?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-slim row m-1 mt-5 transparent-background">
                                    <div class="center-small">
                                        <div class="text-center">
                                            <h4>Answer</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-slim row m-1 transparent-background">
                                    <div class="center-small">
                                        <input type="text" id="heading" name="heading" class="form-control text-center" maxlength="3" placeholder="---" autocomplete="off">
                                        <h6 id="answerRight">Your answer was correct!</h6>
                                        <h6 id="answerWrong">Your answer was wrong!</h6>
                                        <h6 id="correctAnswer">Solution: <?=$solution?></h6>
                                    </div>
                                </div>
                                <div class="mt-3 row m-1">
                                    <button class="btn btn-success btn-block" id="submit" name="submit" onclick="checkAnswer()">Check</button>
                                </div>
                                <div id="nextButton" class="mt-3 row m-1">
                                    <a href="reciprocal-heading-practice.php" class="btn btn-secondary btn-block">Next</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <?php include ("includes/footer.php"); ?>
            </footer>
        </div>
    </div>

    <!---------------- Scripts ---------------->
    <script>
        function checkAnswer() {
            var solution = Math.round(<?php echo json_encode($solution);?>);
            var nextButton = document.getElementById("nextButton");
            var answerRight = document.getElementById("answerRight");
            var answerWrong = document.getElementById("answerWrong");
            var correctAnswer = document.getElementById("correctAnswer");
            if (document.getElementById("heading").value == solution) {
                document.getElementById("heading").style.backgroundColor = "rgba(70, 240, 60, 1)";
                answerRight.style.visibility = "visible";
            } else {
                document.getElementById("heading").style.backgroundColor = "rgba(230, 70, 60, 1)";
                answerRight.style.display = "none";
                answerWrong.style.visibility = "visible";
                answerWrong.style.display = "block";
                correctAnswer.style.visibility = "visible";
            }

            nextButton.style.display = "block";
        }

    </script>

    <script>
        // click submit-button on enter-key pressed, when textfiel is selected
        var input = document.getElementById("heading");
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                if (document.getElementById("nextButton").style.display == "block") {
                    location.reload();
                } else {
                    document.getElementById("submit").click();
                }
            }
        });

    </script>
    
    <script>
    document.getElementById("heading").focus();
    document.getElementById("heading").select();
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!---------------- Scripts ---------------->

</body>

</html>
