<?php
include('connection.php');
session_start();
?>
<html>
<head>
    <title>Notice Board</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/jquery_library.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="background:#FFD54F">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="index.php"><strong>Notice Board</strong></a></li>
            <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span>About Us</a></li>
            <li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
            <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <!-- slider -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/slider1.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="images/slider2.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="images/slider3.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- slider end-->
</div>
<div class="container">
    <div class="row">
        <!-- container -->
        <div class="col-sm-8">
            <?php
            @$opt = $_GET['option'];
            if ($opt != "") {
                if ($opt == "about") {
                    include('about.php');
                } else if ($opt == "contact") {
                    include('contact.php');
                } else if ($opt == "New_user") {
                    include('registration.php');
                } else if ($opt == "login") {
                    include('user/login.php');
                }
            } else {
                echo "<h2>Welcome!</h2>
		        Online Notice Board 
		        <h3></h3>
		        For other information like Engineering Departments, Faculty, Results, Job & Placement, Alumni
		        Please Visit <a href=\"http://tsec.edu//\"target=\"_blank\"> tsec.edu</a>";
            }
            ?>
        </div>
        <!-- container -->
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">Latest news</div>
                <div class="panel-body">
                    College will remain close on the account Diwali festival from 18th - 22nd October 2017.
                </div>
                <div class="panel-body">
                    Practical Examination will commence from 31st October 2017, please check college notice board for examination schedule.
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>
<br/>
<br/>
<!-- footer-->
<nav class="navbar navbar-default navbar-bottom" style="background:#FFD54F" style="align-content: center">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="http://www.pavannichani.com/"target="_blank"> Developed by BitByte</a></li>
        </ul>
    </div>
</nav>
<!-- footer-->
</body>
</html>