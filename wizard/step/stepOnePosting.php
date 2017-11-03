<?php
include '../../configs/connection.php';
include 'commonFunction.php';
$conn = $ourConnection->connect();

$pic = $pst->postFieldValue("picture");
$phone = $pst->postFieldValue("phone");
$email = $pst->postFieldValue("email");
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

$sql = "INSERT INTO bmgf (
Picture, PhoneNo, email, Gender, Age, 
Country, County, DeviceKind,TopicofInterest,OtherTopics,InformationSupport,OtherInformation,HeardAboutUs
)
VALUES ('$pic','$phone', '$email','$gender',' $age ','$country',' $county',' > $device' ' > $device2' ' > $device3 ' ' > $device4 
',' > $democracy' ' > $education' ' > $family ' ' > $genderequality ' ' > $health' ' > $nutrition ' ' > $reproductive ','$otherMedia
','$infoSupport','','$howYouKnewUst')";

if ($conn->query($sql) === TRUE) {

    echo "Redirecting...";

    echo '<script>
alert("Survey Saved Successfully...");
window.location.href = "../../index.php"</script>'; /* Redirect browser */
    exit();
} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>