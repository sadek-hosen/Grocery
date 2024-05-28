<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocery";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["femail"];
    $password = $_POST["fpass"];

    $sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        echo "Login Successfully";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>