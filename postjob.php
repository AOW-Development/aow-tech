<?php
require 'dbcredentials.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Define the target directory
$targetDir = "dashboard/hr/uploads/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file is uploaded
    if (isset($_FILES["pdfFile"]) && $_FILES["pdfFile"]["error"] == 0) {
        $fileName = basename($_FILES["pdfFile"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        
        // Validate file type (must be PDF)
        if (strtolower($fileType) == "pdf") {
            // Set target file path
            $targetFilePath = $targetDir . $fileName;
            
            // Check if the directory exists, if not, create it
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }

            // Move the file to the target directory
            if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFilePath)) {
                echo "<p class='success-message'>The file " . htmlspecialchars($fileName) . " has been uploaded successfully.</p>";
            } else {
                echo "<p class='error-message'>Sorry, there was an error uploading your file.</p>";
            }
        } else {
            echo "<p class='error-message'>Only PDF files are allowed.</p>";
        }
    } else {
        echo "<p class='error-message'>Please select a file to upload.</p>";
    }
}
$date = date('Y-m-d');
$newname = filter_var($_POST["nam"], FILTER_SANITIZE_STRING);
$newmail = filter_var($_POST["mail"], FILTER_SANITIZE_STRING);
$newphone = filter_var($_POST["no"], FILTER_SANITIZE_STRING);
$newmsg = filter_var($_POST["msg"], FILTER_SANITIZE_STRING);

$stmt = $conn->prepare("INSERT INTO `jobdata` (`ref`, `name`, `mail`, `phone`, `message`, `date`) VALUES (?,?,?,?,?,?)");
$stmt->bind_param ('ssssss', $fileName, $newname, $newmail, $newphone, $newmsg, $date);
$stmt->execute();
$stmt->close();

 mysqli_close($conn);
?>
