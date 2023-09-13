<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$email = $_POST['email'];

$reportFileName = $_FILES['report']['name'];
$reportTmpName = $_FILES['report']['tmp_name'];
$reportType = $_FILES['report']['type'];

if ($reportType == "application/pdf") {
    $reportDestination = "uploads/" . $reportFileName;
    move_uploaded_file($reportTmpName, $reportDestination);

    $sql = "INSERT INTO user_health_info (name, age, weight, email, report_path) VALUES ('$name', '$age', '$weight', '$email', '$reportDestination')";

    if ($conn->query($sql) === TRUE) {
        echo "User information and health report uploaded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid file format. Please upload a PDF file.";
}

$conn->close();
?>
