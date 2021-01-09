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
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="mt-5 border-slim transparent-background">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a class="btn btn-secondary btn-block" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-secondary btn-block" href="reciprocal-heading-practice.php">Practise <i class="fas fa-long-arrow-alt-right"></i></a>
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
                                            <h4>Explanation:</h4>
                                        </div>
                                        <div class="center-large text-center">
                                            <h5>Calculating the reciprocal heading for the present heading</h5>
                                            <p>The reciprocal heading can be calculated in two very easy steps. First you have to look at your present heading and determine rather it is between 001 and 180 or between 181 and 360.</p>
                                            <p>If your present heading is between 001 and 180 you have to add 180 to it. If it is between 181 and 360 you have to substract 180 from it.</p>
                                            <p>Example:<br>
                                                Calculate the reciprocal heading for heading 118:</p>
                                            <p>118 + 180 = 298</p>
                                            <p>Often it is easier to add 200 first and then substract 20 afterwards. (Or if the heading is greater than 180: substract 200 first and add 20 afterwards.)</p>
                                            <p>Example:<br>
                                                Calculate the reciprocal heading for heading 332:</p>
                                            <p>332 - 200 = 132<br>
                                                132 + 20 = 152</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!---------------- Scripts ---------------->

</body>

</html>
