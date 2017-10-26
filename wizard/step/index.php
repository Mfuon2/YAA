<?php
/**
 * Created by PhpStorm.
 * User: mfuon
 * Date: 10/26/2017
 * Time: 5:17 PM
 */
?>

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

    <!--  Made With Paper Kit  -->
    <a href="http://amref.org" class="made-with-pk">
        <div class="brand">MK</div>
        <div class="made-with">Made with <strong>Amref Kenya</strong></div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="orange" id="wizardProfile">
                        <form action="" method="">
                            <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

                            <div class="wizard-header text-center">
                                <h3 class="wizard-title">Step 2</h3>
                                <p class="category">Completing the survey and joining this growing network of youth will take less than 10 minutes</p>
                            </div>

                            <div class="wizard-navigation">
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
                                            Devices
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
                                                    <select required class="form-control">
                                                        <option disabled="" selected="">- Select -</option>
                                                        <option value="YES">Yes</option>
                                                        <option value="NO">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Name of Contact Person<small>(required)</small></label>
                                                    <input class="form-control" name="name" required type="text" placeholder="Contact Person">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Contact Email<small>(required)</small></label>
                                                    <input class="form-control" name="position" required type="email" placeholder="someone@xyz.com">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Country <small>(required)</small></label>
                                                <select class="form-control">
                                                    <option disabled="" selected="">- Country -</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="O">Other</option>
                                                </select>
                                                <input name="specifyCountry" type="text" hidden placeholder="country">
                                            </div>
                                            <div class="form-group">
                                                <label>My organisation is registered ? <small>(required)</small></label>
                                                <select class="form-control">
                                                    <option disabled="" selected="">- Select -</option>
                                                    <option value="YES">Yes</option>
                                                    <option value="NO">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Number of years we have been operating ? <small>(required)</small></label>
                                                <select class="form-control">
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
                                                <select required class="form-control">
                                                    <option disabled="" selected="">- Select -</option>
                                                    <option value="YES">Yes</option>
                                                    <option value="NO">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Position of Contact Person<small>(required)</small></label>
                                                    <input class="form-control" name="position" required type="text" placeholder="Position of Contact Person">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Telephone<small>(required)</small></label>
                                                    <input class="form-control" name="position" required type="text" placeholder="Telephone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>County <small>(required)</small></label>
                                                <select class="form-control">
                                                    <option disabled="" selected="">- County -</option>
                                                    <option value="NAIROBI">Nairobi</option>
                                                    <option value="LAIKIPIA">Laikipia</option>
                                                    <option value="KISUMU">Kisumu</option>
                                                    <option value="NAKURU">Nakuru</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>We are registered with the <small>(required)</small></label>
                                                <select class="form-control">
                                                    <option disabled="" selected="">- Country -</option>
                                                    <option value="NGO">NGO Board</option>
                                                    <option value="MSS">Ministry of Social Services</option>
                                                    <option value="KE">Other (specify) </option>
                                                </select>
                                                <input name="umbrella" type="text" hidden placeholder="Sponsor">
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
                                                    <input class="form-control" name="position" type="number" placeholder="Number of Volunteers">
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
                                                        <input id="my-file-selector" type="file" style="display:none;">
                                                        Upload A File
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>We work with and on behalf of <small>( CHECK ALL THAT APPLY )</small></label>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Primary school students">Primary school students</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Secondary school students">Secondary school students</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="People with disabilities">People with disabilities</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Women and girls">Women and girls</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="LGBTQ">LGBTQs</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Youth (18-35) ">Youth(18-35)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>We work at the following levels of government
                                                        <small>( CHECK ALL THAT APPLY )</small></label>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Local/county">Local/county</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Regional (within Kenya)">Regional (within Kenya)</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="National">National</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Regional (East Africa)">Regional (East Africa)</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Regional (Africa)">Regional (Africa)</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Global">Global</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Other (specify)</label>
                                                <input name="others" class="form-control" type="text" placeholder="Other">
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>We work at the following levels of government
                                                        <small>(CHECK ALL THAT APPLY)</small></label>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Democracy/Governance">Democracy/Governance</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Education">Education</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Employment">Employment</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Family planning">Family planning</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Gender equality">Gender equality</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Health">Health</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Nutrition">Nutrition</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Reproductive rights">Reproductive rights</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>We work in the following areas
                                                        <small>(CHECK ALL THAT APPLY)</small></label>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Urban">Urban</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Rural">Rural</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="Slums">Slums</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Other (specify)</label>
                                                    <input name="others" class="form-control" type="text" placeholder="Other">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>We engage in the following types of advocacy<small>(e.g., lobbying, grassroots mobilization, etc)</small></label>
                                                    <textarea class="form-control" placeholder="Types of advocacy"></textarea>
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
                                    <button data-toggle="modal" data-target="#myModal" class='btn btn-finish btn-fill btn-warning btn-wd'>Save</button>
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
            Made with<i class="fa fa-heart heart"></i> by <a href="http://amref.org">Amref Kenya</a>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- dialog body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                Hello world!
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

<!--  Plugin for the Wizard -->
<script src="../assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="../assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>

