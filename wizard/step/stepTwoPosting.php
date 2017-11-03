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
$options = $pst->postFieldValue("options");
$contactPerson = $pst->postFieldValue("contactPerson");
$contactemail = $pst->postFieldValue("emailContactPerson");
$contactposition = $pst->postFieldValue("positionOfContactPerson");
$contactphone = $pst->postFieldValue("phoneOfContactPerson");
$staffNo = $pst->postFieldValue("staff");
$volunteerNo = $pst->postFieldValue("volunteers");
$advocacyEffort = $pst->postFieldValue("advocacyEffort");
$upload = $pst->postFieldValue("upload");
$otherlevel = $pst->postFieldValue("otherlevel");
$advocacytype = $pst->postFieldValue("advocacytype");
$orgcountry = $pst->postFieldValue("orgcountry");
$registrationstatus = $pst->postFieldValue("organizationRegistration");
$operationyears = $pst->postFieldValue("yearsOfOperation");
$femaleled = $pst->postFieldValue("femaleLed");
$orgcounty = $pst->postFieldValue("organizationcounty");
$registrationbody = $pst->postFieldValue("registrationBody");
$otherbody = $pst->postFieldValue("umbrella");
$othertopic = $pst->postFieldValue("othertopic");

//for a checkbox on devices for >We work with and on behalf of
$primary = $pst->postFieldValue("primary");
$secondary = $pst->postFieldValue("secondary");
$disabilities = $pst->postFieldValue("disabilities");
$Womenandgirls = $pst->postFieldValue("Women and girls");
$lgbtq = $pst->postFieldValue("lgbtq");
$youth = $pst->postFieldValue("youth");


//checkboxes for We work at the following levels of government
$county = $pst->postFieldValue("county");
$region = $pst->postFieldValue("region");
$national = $pst->postFieldValue("national");
$eastAfrica = $pst->postFieldValue("eastAfricaRegion");
$Africa = $pst->postFieldValue("Africa");
$Global = $pst->postFieldValue("Global");
$Democracy = $pst->postFieldValue("Democracy");
$Education = $pst->postFieldValue("Education");
$Employment = $pst->postFieldValue("Employment");
$planning = $pst->postFieldValue("planning");
$equality = $pst->postFieldValue("equality");
$Health = $pst->postFieldValue("Health");
$Nutrition = $pst->postFieldValue("Nutrition");
$Reproductive = $pst->postFieldValue("Reproductive");

//checkboxes for We work in the following areas

$urban = $pst->postFieldValue("urban");
$rural = $pst->postFieldValue("rural");
$slums = $pst->postFieldValue("slums");
$advocacyType = $pst->postFieldValue("advocacyType");

$phoneNumber = $_SESSION['phone'];
$emailAddress = $_SESSION['email'];


$getUserProfile = "select id from bmgf where PhoneNo = $phoneNumber and email = $emailAddress";


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