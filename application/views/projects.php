<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISC</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT-AWESOME STYLE SHEET FOR BEAUTIFUL ICONS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- GOOGLE FONT FOR BETTER FONT STYLE -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
    <!-- CUSTOM STYLE CSS -->
    <style type="text/css">
        body {

            font-size:16px;
            line-height:25px;
        }
        .pad-botom {
            padding-bottom:60px;
        }

    </style>
</head>
<style>
    .navbar-default {

        background-color: #b31b1b;
        border-color: #e7c9c6;
        height:70px;

    }
    .navbar-default .navbar-brand {
        color: #fff;
        font-size:40px;
    }
    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-brand:focus {
        color: #000000;
    }
    .navbar-default .navbar-text {
        color: #000000;
    }
    .navbar-default .navbar-nav > li > a {
        color: #000000;
    }
    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {
        color: #000000;
    }
    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus {
        color: #000000;
        background-color: #e7c9c6;
    }
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:hover,
    .navbar-default .navbar-nav > .open > a:focus {
        color: #000000;
        background-color: #e7c9c6;
    }
    .navbar-default .navbar-toggle {
        border-color: #e7c9c6;
    }
    .navbar-default .navbar-toggle:hover,
    .navbar-default .navbar-toggle:focus {
        background-color: #e7c9c6;
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #000000;
    }
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
        border-color: #000000;
    }
    .navbar-default .navbar-link {
        color: #000000;
    }
    .navbar-default .navbar-link:hover {
        color: #000000;
    }

    @media (max-width: 767px) {
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #000000;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
            color: #000000;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
            color: #000000;
            background-color: #e7c9c6;
        }
    }
    .full {
        width: 100%;
    }
    .gap {
        height: 30px;
        width: 100%;
        clear: both;
        display: block;
    }
    .footer {
        background: #EDEFF1;
        height: auto;
        padding-bottom: 30px;
        position: relative;
        width: 100%;
        border-bottom: 1px solid #CCCCCC;
        border-top: 1px solid #DDDDDD;
    }
    .footer p {
        margin: 0;
    }
    .footer img {
        max-width: 100%;
    }
    .footer h3 {
        border-bottom: 1px solid #BAC1C8;
        color: #54697E;
        font-size: 18px;
        font-weight: 600;
        line-height: 27px;
        padding: 40px 0 10px;
        text-transform: uppercase;
    }
    .footer ul {
        font-size: 13px;
        list-style-type: none;
        margin-left: 0;
        padding-left: 0;
        margin-top: 15px;
        color: #7F8C8D;
    }
    .footer ul li a {
        padding: 0 0 5px 0;
        display: block;
    }
    .footer a {
        color: #78828D
    }
    .supportLi h4 {
        font-size: 20px;
        font-weight: lighter;
        line-height: normal;
        margin-bottom: 0 !important;
        padding-bottom: 0;
    }
    .newsletter-box input#appendedInputButton {
        background: #FFFFFF;
        display: inline-block;
        float: left;
        height: 30px;
        clear: both;
        width: 100%;
    }
    .newsletter-box .btn {
        border: medium none;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -o-border-radius: 3px;
        -ms-border-radius: 3px;
        border-radius: 3px;
        display: inline-block;
        height: 40px;
        padding: 0;
        width: 100%;
        color: #fff;
    }
    .newsletter-box {
        overflow: hidden;
    }
    .bg-gray {
        background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
        box-shadow: 0 1px 0 #B4B3B3;
    }
    .social li {
        background: none repeat scroll 0 0 #B5B5B5;
        border: 2px solid #B5B5B5;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -o-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        float: left;
        height: 36px;
        line-height: 36px;
        margin: 0 8px 0 0;
        padding: 0;
        text-align: center;
        width: 36px;
        transition: all 0.5s ease 0s;
        -moz-transition: all 0.5s ease 0s;
        -webkit-transition: all 0.5s ease 0s;
        -ms-transition: all 0.5s ease 0s;
        -o-transition: all 0.5s ease 0s;
    }
    .social li:hover {
        transform: scale(1.15) rotate(360deg);
        -webkit-transform: scale(1.1) rotate(360deg);
        -moz-transform: scale(1.1) rotate(360deg);
        -ms-transform: scale(1.1) rotate(360deg);
        -o-transform: scale(1.1) rotate(360deg);
    }
    .social li a {
        color: #EDEFF1;
    }
    .social li:hover {
        border: 2px solid #2c3e50;
        background: #2c3e50;
    }
    .social li a i {
        font-size: 16px;
        margin: 0 0 0 5px;
        color: #EDEFF1 !important;
    }
    .footer-bottom {
        background: #E3E3E3;
        border-top: 1px solid #DDDDDD;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .footer-bottom p.pull-left {
        padding-top: 6px;
    }
    .payments {
        font-size: 1.5em;
    }

</style>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">MARIST </a></div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url("?c=iscreg&m=home")?>">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url("?c=iscreg&m=forums")?>">Forums</a></li>
                <li class="dropdown">
                    <a href="<?php echo base_url("?c=iscreg&m=projects")?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Create Projects</a></li>
                        <li><a href="#">Explore Projects</a></li>

                        <li><a href="#"></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">My Projects</a></li>

                    </ul>
                </li>
                <li><a href="<?php echo base_url("?c=iscreg&m=events")?>">Events</a></li>
                <li><a href="<?php echo base_url("?c=iscreg&m=financing")?>">Financing</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Information</a></li>
                        <li><a href="#">Career</a></li>

                        <li><a href="#"></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">After Graduation</a></li>
                        <li role="separator" class="divider"></li>

                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About US</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#"></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">



    <hr>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>You Can</h3>
        </div>
    </div>
    <!-- /.row -->


        <div class="col-md-6 col-sm-6 hero-feature">
            <div class="thumbnail">

                <div class="caption">
                    <h3>Share your project Ideas</h3>
                    <p>Are you seeking  help for innovative project? we will find investors for you.</p>
                    <p>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 hero-feature">
            <div class="thumbnail">
                <div class="caption">
                    <h3>Backup a Project</h3>
                    <p>Invest in innovative projects. If it is successfully implemented, you will get your money back with attractive bonuses. Else you will get your money back.</p>
                    <p>
                        <!--a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a-->
                    </p>
                </div>
            </div>
        </div>



    </div>
    <!-- /.row -->

    <hr>



</div>

<div class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                <h3>About Marist </h3>
                <ul>
                    <li> <a href="#"> Visitors Center </a> </li>
                    <li> <a href="#"> Marist at a Glance </a> </li>
                    <li> <a href="#"> Administration </a> </li>


                </ul>
            </div>
            <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                <h3> Admission </h3>
                <ul>
                    <li> <a href="#"> FreshmanStudents</a> </li>
                    <li> <a href="#"> Graduate Students</a> </li>
                    <li> <a href="#"> International Students</a> </li>
                </ul>
            </div>
            <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                <h3> Academics</h3>
                <ul>
                    <li> <a href="#"> Majors & Academic Programs </a> </li>
                    <li> <a href="#"> Course Catalogs </a> </li>
                    <li> <a href="#"> Library </a> </li>

                </ul>
            </div>
            <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                <h3> Student Life </h3>
                <ul>
                    <li> <a href="#"> Housing & Residential Life </a> </li>
                    <li> <a href="#"> Marist Dining </a> </li>
                    <li> <a href="#"> Health Services</a> </li>
                </ul>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                <h3> Follow us on </h3>

                <ul class="social">
                    <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>

                </ul>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div>
<!--/.footer-->

<div class="footer-bottom">
    <div align='center' class="container">
        <p>Marist College, 3399 North Road, Poughkeepsie, NY 12601 | 845.575.300</p>
        <p> Copyright © Marist College 2016. All right reserved. </p>

    </div>
</div>
<!--/.footer-bottom-->

</body>
</html>