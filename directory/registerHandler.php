<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gad";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO users (username, password, gender) VALUES (?, ?, ?)");

    $stmt->bind_param("sss", $username, $password, $gender);

    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $gender = $_POST['dropdown'];
    $stmt->execute();

    // Display registration success message
    

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>