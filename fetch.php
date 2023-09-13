<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];

$sql = "SELECT report_path FROM user_health_info WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $reportPath = $row['report_path'];
    header("Content-type: application/pdf");
    readfile($reportPath);
} else {
    echo "Health report not found for the provided email.";
}

$conn->close();
?>
