<?php
include '../../configs/connection.php';
$conn = $ourConnection->connect();

$youthled = $_POST["options"];
$contactperson = $_POST["contactPerson"];
$contactemail = $_POST["emailContactPerson"];
$contactposition = $_POST["positionOfContactPerson"];
$contactphone = $_POST["phoneOfContactPerson"];
$staffNo = $_POST["staff"];
$volunteerNo = $_POST["volunteers"];
$advocacyEffort = $_POST["advocacyEffort"];
$upload = $_POST["advocacyEffort"];
$otherlevel= $_POST["otherlevel"];


//for a select option
$orgcountry = $_POST["orgcountry"];
$registrationstatus = $_POST["organizationRegistration"];
$operationyears = $_POST["yearsOfOperation"];
$femaleled = $_POST["femaleLed"];
$orgcounty = $_POST["organizationcounty"];
$registrationbody = $_POST["board"];
$otherbody = $_POST["umbrella"];
//for a checkbox on devices
//if(!isset($_POST["device"])) ? $device='N/A' : $device = $_POST["device"];

if(!isset($_POST["primary"])) {
    $device='';
}else{
    $device = $_POST["primary"];
}
if(!isset($_POST["secondary"])) {
    $device='';
}else{
    $device = $_POST["secondary"];
}

if(!isset($_POST["disabilities"])) {
    $device='';
}else{
    $device = $_POST["disabilities"];
}

if(!isset($_POST["Women and girls"])) {
    $device='';
}else{
    $device = $_POST["Women and girls"];
}

if(!isset($_POST["lgbtq"])) {
    $device='';
}else{
    $device = $_POST["lgbtq"];
}
if(!isset($_POST["youth"])) {
    $device='';
}else{
    $device = $_POST["youth"];
}
//for a checkbox on topics(Check query as Device has been implemented
$topics = $_POST["democracy"];



$sql = "INSERT INTO bmgf (
InformationSupport, OtherInformation, HeardAboutUs, Password, YouthLeader, 
WomanLeader, ContactPerson, ContactPosition,ContactEmail,
)
VALUES ('$pic','$phone', '$email','$gender',' $age ','$country','$county','$device' '> $device2' '> $device3 '  '> $device4' ,'$topics')";

if ($conn->query($sql) === TRUE) {
    echo "Redirecting...";
    echo '<script>
alert("Survey Saved Successful...");
window.location.href = "../../index.php"</script>'; /* Redirect browser */
    exit();
} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>