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

    <title>Pilot Math</title>
</head>

<body>

    <div class="bg-img">
        <div id="page-container">
            <div id="content-wrap">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-dark">
                        <?php include ("includes/header.php"); ?>
                    </nav>
                    <div class="horizontal-center">
                        <h1 class="mt-6 text-light">&bdquo;The only way to learn mathematics is to do mathematics&ldquo;</h1>
                        <h5 class="text-light">- Paul Halmos</h5>
                    </div>
                    <div class="mt-5 card text-white bg-secondary see-through">
                        <div class="card-header">
                            <h5>Converting Time Units</h5>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="resources/images/en_route.jpg" alt="plane at gate" class="thumb">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="card-text">When converting decimal numbers into hours and minutes pilots sometimes make the false assumption that 0.5 hours equals 50 minutes, when in reality that is obviously not the case. Even though for most pilots it is not a difficult task to tell that 0.5 hours equals 30 minutes, converting more difficult decimal numbers into minutes can be troublesome for some pilots. In this section you will learn how to easily do the conversion in your head.</p>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md">
                                                    <a href="time-units-explanation.php" class="btn btn-primary btn-block m-1">How To</a>
                                                </div>
                                                <div class="col-md">
                                                    <a href="time-units-practice.php" class="btn btn-success btn-block m-1">Practice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 card text-white bg-secondary see-through">
                        <div class="card-header">
                            <h5>Reciprocal Heading</h5>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="resources/images/tower.jpg" alt="plane at gate" class="thumb">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="card-text">Many traffic patterns require the pilot to do a 180 degree turn and fly in the opposit direction. Even tough this task seems to be quite simple, doing this calculation in your head while still focusing on speed, altitude and other things can lead to mistakes. In this lesson you will learn a very easy method to figure out your reciprocal heading in your head.</p>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md">
                                                    <a href="reciprocal-heading-explanation.php" class="btn btn-primary btn-block m-1">How To</a>
                                                </div>
                                                <div class="col-md">
                                                    <a href="reciprocal-heading-practice.php" class="btn btn-success btn-block m-1">Practice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 card text-white bg-secondary see-through">
                        <div class="card-header">
                            <h5>Top of Decent</h5>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="resources/images/approach.jpg" alt="plane at gate" class="thumb">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="card-text">When an airline pilot is cruising his ship at over 30,000 feet it takes a lot of time and space to get it down to the ground in time without overshooting the runway. It is an important skill of any pilot to be able to calculate when the descent should be started in order to prevent unnecessary maneuvers and a waste of fuel. In this section you will learn an easy way to calcluate the Top of Descent.</p>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md">
                                                    <a href="top-of-descent-explanation.php" class="btn btn-primary btn-block m-1">How To</a>
                                                </div>
                                                <div class="col-md">
                                                    <a href="top-of-descent-practice.php" class="btn btn-success btn-block m-1">Practice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 card text-white bg-secondary see-through">
                        <div class="card-body">
                            <h1 class="text-center">More coming soon</h1>
                            <h3 class="text-center">...</h3>
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
