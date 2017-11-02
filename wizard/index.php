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

                    <div class="card wizard-card" data-color="orange" id="wizardProfile">
                        <form action="step/stepOnePosting.php" method="POST">
                            <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

                            <div class="wizard-header text-center">
                                <h3 class="wizard-title">Navigation</h3>
                                <p class="category">Completing the survey and joining this growing network of youth will take less than 10 minutes</p>
                            </div>

                            <div class="wizard-navigation">
                                <div class="progress-with-circle">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#policy" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-ink-pen"></i>
                                            </div>
                                            Agreement
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#about" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-user"></i>
                                            </div>
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#account" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-dropbox"></i>
                                            </div>
                                            Devices
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#topics" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-clipboard"></i>
                                            </div>
                                            Interested Topics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#info" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-info"></i>
                                            </div>
                                            Quiz
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#address" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-agenda"></i>
                                            </div>
                                            Finish Step I
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="policy">
                                    <div class="row">
                                        <h5 class="info-text"> Agreement </h5>
                                        <div class="col-md-10 col-md-offset-1">
                                            <h6>By completing this registration, you are agreeing to let us share
                                                your organization/network’s information publicly or with other
                                                organizations working to support youth advocacy efforts.
                                                <br>
                                                If you do not want us to share your organization/network’s information,
                                                please check <a href="../index.php">Here</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h5 class="info-text"> Please tell us more about yourself.</h5>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                                                    <input name="picture" value="NOT FUNCTIONING NOW" type="file" id="wizard-picture">
                                                </div>
                                                <h6>Choose Picture</h6>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Phone Number <small>(required)</small></label>
                                                    <input name="phone" type="text" value="" class="form-control" placeholder="+2547222222">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Email <small>(required)</small></label>
                                                    <input name="email" type="email" class="form-control" value="" placeholder="username@xyz.com">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Gender <small>(required)</small></label>
                                                <select class="form-control" name="gender">
                                                    <option disabled="" selected="">- Gender -</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female </option>
                                                    <option value="TG">Trans-gender</option>
                                                    <option value="GNC">Gender non- conforming</option>
                                                    <option value="O">Other (Specify) </option>
                                                </select>
                                                <input name="specifyCountry" type="text" hidden placeholder="country" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Age <small>(required)</small></label>
                                                <select class="form-control" name="age">
                                                    <option disabled="" selected="">- Age -</option>
                                                    <option value="below 18"><18</option>
                                                    <option value="18 - 24">18-24</option>
                                                    <option value="25 - 29">25-29</option>
                                                    <option value="30 - 35">30-35</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Country <small>(required)</small></label>
                                                <select class="form-control" name="country">
                                                    <option disabled="" selected="">- Country -</option>
                                                    <option value="KENYA">Kenya</option>
                                                    <option value="O">Other</option>
                                                </select>
                                                <input name="specifyCountry" type="text" hidden placeholder="country">
                                            </div>
                                            <div class="form-group">
                                                <label>County <small>(required)</small></label>
                                                <select class="form-control" name="county">
                                                    <option disabled="" selected="">- County -</option>
                                                    <option value="Baringo">Baringo</option>
                                                    <option value="Bomet">Bomet</option>
                                                    <option value="Bungoma">Bungoma</option>
                                                    <option value="Busia">Busia</option>
                                                    <option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
                                                    <option value="Embu">Embu</option>
                                                    <option value="Garissa">Garissa</option>
                                                    <option value="Homa Bay">Homa Bay</option>
                                                    <option value="Isiolo">Isiolo</option>
                                                    <option value="Kajiado">Kajiado</option>
                                                    <option value=" Kakamega">Nakuru</option>
                                                    <option value="Kericho">Kericho</option>
                                                    <option value="Kiambu">Kiambu</option>
                                                    <option value="Kilifi">Kilifi</option>
                                                    <option value="Kirinyaga">Kirinyaga</option>
                                                    <option value="Kisii">Kisii</option>
                                                    <option value="Kisumu">Kisumu</option>
                                                    <option value="Kitui">Kitui</option>
                                                    <option value="Kwale">Kwale</option>
                                                    <option value="Laikipia">Nakuru</option>
                                                    <option value="Lamu">Lamu</option>
                                                    <option value="Machakos">Machakos</option>
                                                    <option value="Makueni">Makueni</option>
                                                    <option value="Mandera">Mandera</option>
                                                    <option value="Meru">Meru</option>
                                                    <option value="Migori">Migori</option>
                                                    <option value="Marsabit">Marsabit</option>
                                                    <option value="Mombasa">Mombasa</option>
                                                    <option value="Murang'a">Murang'a</option>
                                                    <option value="Nairobi">Nairobi</option>
                                                    <option value="Nakuru">Nakuru</option>
                                                    <option value="Nandi">Nandi</option>
                                                    <option value="Narok">Narok</option>
                                                    <option value="Nyamira">Nyamira</option>
                                                    <option value="Nyandarua">Nyandarua</option>
                                                    <option value="Nyeri">Nyeri</option>
                                                    <option value="Samburu">Samburu</option>
                                                    <option value="Siaya">Siaya</option>
                                                    <option value="Taita Taveta">Taita Taveta</option>
                                                    <option value="Tana River">Tana River</option>
                                                    <option value="Tharaka Nithi">Tharaka Nithi</option>
                                                    <option value="Trans Nzoia">Trans Nzoia</option>
                                                    <option value="Turkana">Turkana</option>
                                                    <option value="Uasin Gishu">Uasin Gishu</option>
                                                    <option value="Vihiga">Vihiga</option>
                                                    <option value="Wajir">Wajir</option>
                                                    <option value="West Pokot">West Pokot</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane" id="topics">
                                    <div class="row">
                                        <h5 class="info-text"> Topics Interested In <br>
                                            <span> (Check All That Apply)</span></h5>
                                        <div class="col-sm-12">
                                            <div class="checkbox">
                                                <label><input class="form-control" type="checkbox" value="Democracy/Governance" name="democracy"/>Democracy/Governance</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input class="form-control" type="checkbox" value="Education" name="education"/>Education</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input class="form-control" type="checkbox" value="Family planning" name="family"/>Family planning</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input class="form-control" type="checkbox" value="Gender equality" name="genderequality"/>Gender equality</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input class="form-control" type="checkbox" value="Health" name="health"/>Health</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input class="form-control" type="checkbox" value="Nutrition"  name="nutrition"/>Nutrition</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input class="form-control" type="checkbox" value="Reproductive rights" name="reproductive"/>Reproductive rights</label>
                                            </div>

                                            <div class="form-group">
                                                <label>Other (Specify) <small>(Optional)</small></label>
                                                <input name="otherMedia" type="text" class="form-control" value="" placeholder="Other">
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane" id="account">
                                    <h5 class="info-text"> The Kind Of Devices You Use </h5>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="device" value="basicPhone">
                                                    <div class="card card-checkboxes card-hover-effect">
                                                        <i class="ti-thumb-up"></i>
                                                        <p>Basic phone</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="device2" value="smartPhone">
                                                    <div class="card card-checkboxes card-hover-effect">
                                                        <i class="ti-android"></i>
                                                        <p>Smart phone</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="device3" value="computer">
                                                    <div class="card card-checkboxes card-hover-effect">
                                                        <i class="ti-microsoft"></i>
                                                        <p>Computer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-checkbox">
                                                    <input type="checkbox" name="device4" value="tablet">
                                                    <div class="card card-checkboxes card-hover-effect">
                                                        <i class="ti-tablet"></i>
                                                        <p>Tablet</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label></i>Other (Specify) <small>(Optional)</small></label>
                                            <input name="otherMedia" type="text" class="form-control" placeholder="Other" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="info">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5 class="info-text">Which Information or engagement in the following areas would support my advocacy efforts ? </h5>
                                        </div>
                                        <div class="col-sm-5 ">
                                            <div class="radio">
                                                <label><input type="radio" name="infoSupport ">Advocacy and communications tools and resources</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="infoSupport ">Updates on youth-related policies in Kenya</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="infoSupport ">Connections to other advocates in my county</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="infoSupport ">Connections to other advocates across Kenya</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="infoSupport ">Advocacy funding opportunities; Advocacy job opportunities</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="radio" >
                                                <label>Other (Specify)</label>
                                                <input type="text" name="OtherInfo" class="form-control" placeholder="Other Source">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>How did you hear about the Youth Advocacy Portal?</label>
                                                <textarea class="form-control" placeholder="How You Knew About Us" value=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Password</label><br>
                                                <input type="password" class="form-control" value="" placeholder="Other Source">
                                            </div>
                                        </div>


                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Confirm Password</label><br>
                                                <input type="password" class="form-control" value="" placeholder="Other Source">
                                            </div>
                                        </div>

                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label><a href="forgotPassword.php" target="_blank">Forgot my password ?</a></label><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <p class="col-sm-12" style="color: red">** Wait, why do I need to create a profile? <br>
                                            <i><b>Creating a profile allows you to update your registration information,
                                                    access additional resources and content, and will keep your information safe!</i></p>
                                        <div class="col-sm-12">
                                            <h5 class="info-text"> Are you part of an advocacy organisation/network ?
                                                <br>
                                                <a href="step/index.php" class="btn btn-fill btn-primary" onclick="activateFinish('yes')">
                                                    Yes
                                                </a>
                                                <a href="#" class="btn btn-fill btn-danger" onclick="activateFinish()">
                                                    No
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                                    <button  id="finish" class='btn btn-finish btn-fill btn-warning btn-wd' name='finish'> save</button>
                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
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
