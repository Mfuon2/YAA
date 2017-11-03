<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <title>Youth Advocacy Accelerator</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/paper-1.jpeg')">
    <!--   Creative Tim Branding   -->
    <a href="#">

        <div class="logo-container">
            <img src="assets/img/new_logo.png" style="width: 200px">
            <div class="logo">

            </div>
            <!--	            <div class="brand">

                            </div>-->
        </div>
    </a>

    <!--  Made With Paper Kit  -->
    <a href="http://amref.org" class="made-with-pk">
        <div class="brand">MK</div>
        <div class="made-with">Made by <strong> Mjali Kenya</strong></div>
    </a>
    <div class="collapse navbar-collapse" id="example" >
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">

                    <img src="assets/img/AMREF.png" style="width: 100px" alt="Amref" ;>
                </a>
            </li>
        </ul>
    </div>
    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-1">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="text-center">
                                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                                <h2 class="text-center">Forgot Password?</h2>
                                                <p>You can reset your password here.</p>
                                                <div class="panel-body">

                                                    <form class="form">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>

                                                                    <input id="emailInput" placeholder="email address" class="form-control" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="" type="email">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                                            </div>
                                                        </fieldset>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- wizard container -->
            </div>
        </div><!-- end row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container text-center">
            Made with <i class="fa fa-heart heart"></i> by <a href="http://amref.org">Amref Health Africa</a>
        </div>
    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="app/app.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>



