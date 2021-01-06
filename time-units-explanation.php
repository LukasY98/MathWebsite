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

    <title>Pilot Maths | Time Units</title>
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
                                                <a class="btn btn-secondary btn-block" href="time-units-practice.php">Practise <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 border-slim transparent-background">
                                    <div class="border-slim row m-1">
                                        <div class="center-medium text-center">
                                            <h3>Converting Time Units</h3>
                                        </div>
                                    </div>
                                    <div class="border-slim row m-1">
                                        <div class="center-small text-center">
                                            <h4>Explanation:</h4>
                                        </div>
                                        <div class="center-large text-center">
                                            <h5>Converting a decimal number into minutes</h5>
                                            <p>When converting a decimal number into minutes it is not so important to get the exact value. Being off by one or two minutes probably won't make a difference. First of all we should be aware of the fact that 0.05 hours equals 3 minutes. That means that we can devide any decimal number just by 0.05 and multiply it by 3 in order to get the minutes.</p>
                                            <p>Example:<br>
                                                Convert 0.35 hours into minutes:</p>
                                            <p>0.35 / 0.05 = 7<br>
                                                7 x 3 = 21</p>
                                            <p>It might be easier to imagine 0.35 as the natural number 35 and devide it by 5:</p>
                                            <p>35 / 5 = 7<br>
                                                7 x 3 = 21</p>
                                            <h5 class="mt-4">Converting minutes into a decimal number</h5>
                                            <p>Here you just have to do the same thing but the other way around: Devide the amount of minutes by 3 and multiply the result by 0.05</p>
                                            <p>Example:<br>
                                                Convert 39 minutes into a decimal number:</p>
                                            <p>39 / 3 = 13<br>
                                                13 x 0.05 = 0.65</p>
                                            <p>Here it might be a little bit easier to multiply by 5 instead of 0.05 and move the decimal point two positions to the left afterwards:</p>
                                            <p>39 / 3 = 13<br>
                                                13 x 5 = 65<br>
                                                65 &#8594; 0.65</p>
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
