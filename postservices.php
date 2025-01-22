<?php
require 'dbcredentials.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
$date = date('Y-m-d');
$newname = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$newser = filter_var($_POST["services"], FILTER_SANITIZE_STRING);
$newmail = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
$newphone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
$newmsg = filter_var($_POST["bio"], FILTER_SANITIZE_STRING);

$stmt = $conn->prepare("INSERT INTO `aowdate` (`service`, `name`, `email`, `phone`, `message`, `date`) VALUES (?,?,?,?,?,?)");
$stmt->bind_param ('ssssss',  $newser, $newname, $newmail, $newphone, $newmsg, $date);
$stmt->execute();
$stmt->close();

 mysqli_close($conn);
 echo "Submitted Successfully";
?>