
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Youth Advocacy Accelerator</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('../assets/img/paper-1.jpeg')">
    <!--   Creative Tim Branding   -->
    <a href="#">

        <div class="logo-container">
            <img src="../assets/img/new_logo.png" style="width: 200px">
            <div class="logo">

            </div>
            <!--	            <div class="brand">

                            </div>-->
        </div>
    </a>
    <div class="collapse navbar-collapse" id="example" >
        <ul class="nav navbar-nav navbar-right" >
            <li>
                <a href="#">

                    <img src="../assets/img/AMREF.png" style="width: 100px" alt="Amref" ;>
                </a>
            </li>
        </ul>
    </div>
    <!--  Made With Paper Kit  -->
    <a href="http://amref.org" class="made-with-pk">
        <div class="brand">MK</div>
        <div class="made-with">Made by <strong>Mjali Kenya</strong></div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div  class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div  class="wizard-container">

                    <div class="card wizard-card" data-color="orange" id="wizardProfile">
                        <form action="stepOnePosting.php" method="POST" >
                            <div class="wizard-header text-center">
                                <h3 class="wizard-title">Step 2</h3>
                                <p class="category">Completing the survey and joining this growing network of youth will take less than 10 minutes</p>
                            </div>

                            <div class="wizard-navigation" >
                                <div class="progress-with-circle">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#about" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-user"></i>
                                            </div>
                                            About My Organization
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#account" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-dropbox"></i>
                                            </div>
                                            Organizational Work
                                        </a>
                                    </li>
                               <!--     <li>
                                        <a href="#address" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-agenda"></i>
                                            </div>
                                            Finish Step I
                                        </a>
                                    </li>-->
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h5 class="info-text">Enough about me, let me tell you about my Organisation/Network…</h5>
                                        <div class="col-sm-5 col-sm-offset-1">

                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>My organization is youth-led<small>(required)</small></label>
                                                    <select required class="form-control" name="options">
                                                        <option disabled="" selected="">- Select -</option>
                                                        <option value="YES">Yes</option>
                                                        <option value="NO">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Name of Contact Person<small>(required)</small></label>
                                                    <input class="form-control" name="contactPerson" required type="text" placeholder="Contact Person">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Contact Email<small>(required)</small></label>
                                                    <input class="form-control" name="emailContactPerson" required type="email" placeholder="someone@xyz.com" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Country <small>(required)</small></label>
                                                <select class="form-control" name="orgcountry">
                                                    <option disabled="" selected="">- Country -</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="O">Other</option>
                                                </select>
                                                <input name="specifyCountry" type="text" hidden placeholder="country">
                                            </div>
                                            <div class="form-group">
                                                <label>My organisation is registered ? <small>(required)</small></label>
                                                <select class="form-control" name="organizationRegistration">
                                                    <option disabled="" selected="">- Select -</option>
                                                    <option value="YES">Yes</option>
                                                    <option value="NO">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Number of years we have been operating ? <small>(required)</small></label>
                                                <select class="form-control" name="yearsOfOperation">
                                                    <option disabled="" selected="">- Select -</option>
                                                    <option value="<1"><1 year (we are brand new!)</option>
                                                    <option value="2-4">2-4 years</option>
                                                    <option value="5-9">5-9 years</option>
                                                    <option value="we have been around for a while">Over 10 years</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>My organization is female-led<small>(required)</small></label>
                                                <select required class="form-control" name="femaleLed">
                                                    <option disabled="" selected="">- Select -</option>
                                                    <option value="YES">Yes</option>
                                                    <option value="NO">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Position of Contact Person<small>(required)</small></label>
                                                    <input class="form-control" name="positionOfContactPerson" value="" required type="text" placeholder="Position of Contact Person">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Telephone<small>(required)</small></label>
                                                    <input class="form-control" value="" name="phoneOfContactPerson" required type="text" placeholder="Telephone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>County <small>(required)</small></label>
                                                <select class="form-control" name="organizationcounty">
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
                                            <div class="form-group">
                                                <label>We are registered with the <small>(required)</small></label>
                                                <select id="RegistrationBody" onchange="checkRegistrationBody('RegistrationBody')" class="form-control" name="board">
                                                    <option disabled="" selected="">- Registration Body -</option>
                                                    <option value="NGO">NGO Board</option>
                                                    <option value="MSS">Ministry of Social Services</option>
                                                    <option value="O">Other (specify) </option>
                                                </select>
                                                <label id="OtherBodyLabel" hidden >Other Registration Body </label>
                                                <input name="umbrella" id="OtherBody" type="text" hidden required placeholder="Other Registration Body">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Number of Staff<small>(required)</small></label>
                                                    <input class="form-control" name="staff" required type="number" placeholder="Number of Staff">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Number of Volunteers<small>(required)</small></label>
                                                    <input class="form-control" name="volunteers" type="number" placeholder="Number of Volunteers">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane" id="account">
                                    <h5 class="info-text"> I can’t end this survey without telling you about my Organisation/Network’s advocacy work… </h5>
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">

                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Here is a short description of our advocacy efforts and
                                                        partners. (Too much to type? Feel free to upload a summary
                                                        document or video description)
                                                    </label>
                                                    <textarea class="form-control" name="advocacyEffort">

                                                   </textarea>      <br>
                                                    <label class="btn btn-primary" for="my-file-selector">
                                                        <input id="my-file-selector" type="file" style="display:none;" name="upload">
                                                        Upload A File
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>We work with and on behalf of <small>( CHECK ALL THAT APPLY )</small></label>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Primary school students" name="primary">Primary school students</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Secondary school students" name="secondary">Secondary school students</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="People with disabilities" name="disabilities">People with disabilities</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Women and girls" name="women">Women and girls</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="LGBTQ" name="lgbtq">LGBTQs</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Youth (18-35) " name="youth">Youth(18-35)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>We work at the following levels of government
                                                        <small>( CHECK ALL THAT APPLY )</small></label>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Local/county" name="county">Local/county</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Regional (within Kenya)" name="region">Regional (within Kenya)</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="National"name="national">National</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Regional (East Africa)" name="eastAfrica">Regional (East Africa)</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Regional (Africa)" name="Africa">Regional (Africa)</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Global"name="global">Global</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Other (specify)</label>
                                                <input name="otherlevel" class="form-control" type="text" placeholder="Other level">
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>We focus on the following advocacy topics
                                                        <small>(CHECK ALL THAT APPLY)</small></label>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Democracy/Governance" name="Democracy">Democracy/Governance</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Education" name="Education">Education</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Employment" name="Employment">Employment</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Family planning" name="planning">Family planning</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Gender equality" name="equality">Gender equality</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Health" name="Health">Health</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Nutrition" name="Nutrition">Nutrition</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Reproductive rights" name="Reproductive">Reproductive rights</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Other (specify)</label>
                                                        <input name="others" class="form-control" type="text" placeholder="Other topic">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>We work in the following areas
                                                        <small>(CHECK ALL THAT APPLY)</small></label>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Urban" name="urban">Urban</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Rural" name="rural">Rural</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Slums" name="slums">Slums</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Other area (specify)</label>
                                                    <input name="otherarea" class="form-control" type="text" placeholder="Other area">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>We engage in the following types of advocacy<small>(e.g., lobbying, grassroots mobilization, etc)</small></label>
                                                    <textarea class="form-control" placeholder="Types of advocacy" name="advocacytype"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--

                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <p class="col-sm-12" style="color: red">** Wait, why do I need to create a profile? <br>
                                            <i><b> </i></p>
                                        <div class="col-sm-12">
                                            <h5 class="info-text"> Are you part of an advocacy organisation/network ?
                                                <br>
                                                <a href="#" class="btn btn-fill btn-primary" onclick="activateFinish('yes')">
                                                    Yes
                                                </a>
                                                <a href="#" class="btn btn-fill btn-danger" onclick="activateFinish()">
                                                    No
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                                    <a id="saveLink" class='btn btn-finish' onclick="success(); enableButton('SaveStepTwo')">Save</a>

                                    <button id="SaveStepTwo" onclick="clearDiv('divContent')" data-toggle="modal" disabled class='btn btn-finish btn-fill btn-warning btn-wd'>Finish</button>
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
            Made with<i class="fa fa-heart heart"></i> by <a href="http://amref.org">Amref Health Africa</a>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- dialog body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                Thank You For Taking The Survey Follow.
            </div>
            <!-- dialog buttons -->
            <div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>
        </div>
    </div>
</div>

</body>

<!-- sometime later, probably inside your on load event callback -->
<script>
    $("#myModal").on("show", function() {    // wire up the OK button to dismiss the modal when shown
        $("#myModal a.btn").on("click", function(e) {
            console.log("button pressed");   // just as an example...
            $("#myModal").modal('hide');     // dismiss the dialog
        });
    });
    $("#myModal").on("hide", function() {    // remove the event listeners when the dialog is dismissed
        $("#myModal a.btn").off("click");
    });

    $("#myModal").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
        $("#myModal").remove();
    });

    $("#myModal").modal({                    // wire up the actual modal functionality and show the dialog
        "backdrop"  : "static",
        "keyboard"  : true,
        "show"      : true                     // ensure the modal is shown immediately
    });
</script>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="../app/app.js" type="text/javascript"></script>
<script src="../app/bootbox.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!--  Plugin for the Wizard -->
<script src="../assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="../assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>

