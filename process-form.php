<?php
include("config.php");

$name = mysqli_real_escape_string($mysqli, $_POST['contact_name']);
$email = mysqli_real_escape_string($mysqli, $_POST['contact_email']);
$subject = mysqli_real_escape_string($mysqli, $_POST['contact_subject']);
$msg = mysqli_real_escape_string($mysqli, $_POST['contact_message']);

$sql = "INSERT INTO messages (Name, Email, Subject, Message) VALUES ('$name', '$email', '$subject', '$msg')";
$result = $mysqli->query($sql);
if(!$result){
    die("message sending failed");
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>
