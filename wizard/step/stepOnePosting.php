<?php
include '../../configs/connection.php';
$conn = $ourConnection->connect();

$pic = $_POST["picture"];
$phone = $_POST["phone"];
$email = $_POST["email"];

//for a select option
$gender = $_POST["gender"];
$age = $_POST["age"];
$country = $_POST["country"];
$county = $_POST["county"];

//for a checkbox on devices
$device = $_POST["device"];
$device2 = $_POST["device2"];
$device3 = $_POST["device3"];
$device4 = $_POST["device4"];

//for a checkbox on topics(Check query as Device has been implemented
$topics = $_POST["democracy"];



$sql = "INSERT INTO bmgf (
Picture, PhoneNo, email, Gender, Age, 
Country, County, DeviceKind,TopicofInterest
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