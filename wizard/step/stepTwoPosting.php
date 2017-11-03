<?php
// Start the session
include 'ClearSession.php';
$sess->start();

include '../../configs/connection.php';
include 'commonFunction.php';
$conn = $ourConnection->connect();


//here we are posting Step One firts before redirecting to Step two
//check if session for step one is set then if not post step one else execute

if(!isset($_SESSION['phone']) && !isset($_SESSION['email'])) {
    $pic = $pst->postFieldValue("picture");
    $phone = $pst->postFieldValue("phone");
    $email = $pst->postFieldValue("email");
    //set phone and email to session so that it can determine if the info will be posted or updated
    $_SESSION["phone"] = $phone;
    $_SESSION["email"] = $email;
    $gender = $pst->postFieldValue("gender");
    $age = $pst->postFieldValue("age");
    $country = $pst->postFieldValue("country");
    $county = $pst->postFieldValue("county");
    $device = $pst->postFieldValue("device");
    $device2 = $pst->postFieldValue("device2");
    $device3 = $pst->postFieldValue("device3");
    $device4 = $pst->postFieldValue("device4");
    $democracy = $pst->postFieldValue("democracy");
    $education = $pst->postFieldValue("education");
    $family = $pst->postFieldValue("family");
    $genderequality = $pst->postFieldValue("genderequality");
    $health = $pst->postFieldValue("health");
    $nutrition = $pst->postFieldValue("nutrition");
    $reproductive = $pst->postFieldValue("reproductive");
    $otherMedia = $pst->postFieldValue("otherMedia");
    $infoSupport = $pst->postFieldValue("infoSupport");
    $OtherInfoSupportt = $pst->postFieldValue("OtherInfoSupport");
    $howYouKnewUst = $pst->postFieldValue("howYouKnewUs");

    $sql = "INSERT INTO bmgf 
(
Picture, PhoneNo, email, Gender, Age, 
Country, County, DeviceKind,TopicofInterest,OtherTopics,InformationSupport,OtherInformation,HeardAboutUs
)
VALUES ('$pic','$phone', '$email','$gender',' $age ','$country',' $county',' > $device' ' > $device2' ' > $device3 ' ' > $device4 
',' > $democracy' ' > $education' ' > $family ' ' > $genderequality ' ' > $health' ' > $nutrition ' ' > $reproductive ','$otherMedia
','$infoSupport','','$howYouKnewUst')";

    if ($conn->query($sql) === TRUE) {

        echo "Posting Step One";

        echo '<script>
                alert("Thank You for completing Step 1 of the survey. Please proceed with Step Two of the same");
                window.location.href = "index.php"
              </script>'; /* Redirect browser */
        exit();
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

//
}

$youthled = $_POST["options"];
$contactperson = $_POST["contactPerson"];
$contactemail = $_POST["emailContactPerson"];
$contactposition = $_POST["positionOfContactPerson"];
$contactphone = $_POST["phoneOfContactPerson"];
$staffNo = $_POST["staff"];
$volunteerNo = $_POST["volunteers"];
$advocacyEffort = $_POST["advocacyEffort"];
$upload = $_POST["advocacyEffort"];
$otherlevel = $_POST["otherlevel"];
$advocacytype = $_POST["advocacytype"];

//for a select option
$orgcountry = $_POST["orgcountry"];
$registrationstatus = $_POST["organizationRegistration"];
$operationyears = $_POST["yearsOfOperation"];
$femaleled = $_POST["femaleLed"];
$orgcounty = $_POST["organizationcounty"];
$registrationbody = $_POST["board"];
$otherbody = $_POST["umbrella"];
$othertopic = $_POST["othertopic"];
//for a checkbox on devices
//if(!isset($_POST["device"])) ? $device='N/A' : $device = $_POST["device"];

if (!isset($_POST["primary"])) {
    $primary = '';
} else {
    $primary = $_POST["primary"];
}
if (!isset($_POST["secondary"])) {
    $secondary = '';
} else {
    $secondary = $_POST["secondary"];
}

if (!isset($_POST["disabilities"])) {
    $disabilities = '';
} else {
    $disabilities = $_POST["disabilities"];
}

if (!isset($_POST["Women and girls"])) {
    $Womenandgirls = '';
} else {
    $Womenandgirls = $_POST["Women and girls"];
}

if (!isset($_POST["lgbtq"])) {
    $lgbtq = '';
} else {
    $lgbtq = $_POST["lgbtq"];
}
if (!isset($_POST["youth"])) {
    $youth = '';
} else {
    $youth = $_POST["youth"];
}
//select levels

if (!isset($_POST["county"])) {
    $county = '';
} else {
    $county = $_POST["county"];
}
if (!isset($_POST["region"])) {
    $region = '';
} else {
    $region = $_POST["region"];
}

if (!isset($_POST["national"])) {
    $national = '';
} else {
    $national = $_POST["national"];
}

if (!isset($_POST["eastAfrica"])) {
    $eastAfrica = '';
} else {
    $eastAfrica = $_POST["eastAfrica"];
}

if (!isset($_POST["lgbtq"])) {
    $lgbtq = '';
} else {
    $lgbtq = $_POST["lgbtq"];
}
if (!isset($_POST["Africa"])) {
    $Africa = '';
} else {
    $Africa = $_POST["Africa"];
}
if (!isset($_POST["Global"])) {
    $Global = '';
} else {
    $Global = $_POST["Global"];
}

//Select for Advocacy topics

if (!isset($_POST["Democracy"])) {
    $Democracy = '';
} else {
    $Democracy = $_POST["Democracy"];
}
if (!isset($_POST["Education"])) {
    $Education = '';
} else {
    $Education = $_POST["Education"];
}

if (!isset($_POST["Employment"])) {
    $Employment = '';
} else {
    $Employment = $_POST["Employment"];
}

if (!isset($_POST["planning"])) {
    $planning = '';
} else {
    $planning = $_POST["planning"];
}

if (!isset($_POST["equality"])) {
    $equality = '';
} else {
    $equality = $_POST["equality"];
}
if (!isset($_POST["Health"])) {
    $Health = '';
} else {
    $Health = $_POST["Health"];
}
if (!isset($_POST["Nutrition"])) {
    $Nutrition = '';
} else {
    $Nutrition = $_POST["Nutrition"];
}
if (!isset($_POST["Reproductive"])) {
    $Reproductive = '';
} else {
    $Reproductive = $_POST["Reproductive"];
}

//Select for areas

if (!isset($_POST["urban"])) {
    $urban = '';
} else {
    $urban = $_POST["urban"];
}
if (!isset($_POST["rural"])) {
    $rural = '';
} else {
    $rural = $_POST["rural"];
}

if (!isset($_POST["slums"])) {
    $slums = '';
} else {
    $slums = $_POST["slums"];
}


//for a checkbox on topics(Check query as Device has been implemented
$topics = $_POST["democracy"];


$sql = "INSERT INTO bmgf (
 YouthLeader,WomanLeader, ContactPerson, ContactPosition,ContactEmail,ContactPhone,OrganizationCountry, OrganizationCounty,RegistrationStatus,
 RegistrationBody,OtherBody,
YearsofOperation,StaffNo,VolunteerNo,AdvocacyDescription,FileUpload,WorksWith,WorkLevels,OtherLevels,TopicsofAdvocacy,OtherTopics,TypeofAdvocacy
)
VALUES ('$options','$femaleLed','$contactPerson','$contactposition','$contactemail','$contactphone',' $orgcountry ','$orgcounty','$county','$registrationstatus'
'$registrationbody','$otherbody','$operationyears','$staffNo', '$volunteerNo' '> $device2' '> $device3 '  '> $device4' ,'$topics')";

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