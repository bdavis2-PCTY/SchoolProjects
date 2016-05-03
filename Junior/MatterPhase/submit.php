<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Physics web phase project website">
    <meta name="author" content="Braydon Davis">

    <title>MatterPhase</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css' />
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Matter Phase</a>
            </div>

            <!-- Collect the nav links for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="solids.html">SOLIDS</a></li>
                    <li><a href="liquids.html">LIQUIDS</a></li>
                    <li><a href="gases.html">GASES</a></li>
                    <li><a href="plasma.html">PLASMA</a></li>
                    <li><a href="changes.html">PHASE CHANGE</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--End Navigation -->

    <!--About Section-->
    <section class="for-full-back color-light " id="about">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h1>CONTACT US</h1>
                </div>

            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <p>
						<?php

                            if ( isset ( $_POST['inputName'], $_POST['inputEmail'], $_POST['message'] ) ) {
                                $name=$_POST['inputName'];
                                $email=$_POST['inputEmail'];
                                $message = $_POST['message'];

                                mail ( "braydon.davis@mtchs.org", "PhaseMatter", "Name: $name\nEmail: $email\n\nMessage:\n$message" );

                                echo "<span style='color:#0f0;'>Your message has been submitted!</span><br/><br /><a href='index.html'>Home</a>";
                            } else {
                                echo "<span style='color:red'>Oops! Something went wrong and we were unable to send your message, please try again.</span><br/><br /><a href='index.html'>Home</a>";
                            }

                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--End About Section-->

    <!--footer Section -->
    <div class="for-full-back " id="footer">
       Copyright &copy; Braydon Davis 2016 | All Rights Reserved
    </div>
    <!--End footer Section -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
