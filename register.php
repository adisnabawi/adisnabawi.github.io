<?php
header("Access-Control-Allow-Origin: *");

$uname = addslashes($_REQUEST["username"]);
$name = addslashes($_REQUEST["name"]);
$position = addslashes($_REQUEST["position"]);
$email = addslashes($_REQUEST["email"]);
$password = addslashes($_REQUEST["password"]);

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "tutorial";


/$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, name, position, email, password)
VALUES ('".$uname."', '".$name."', '".$position."', '".$email."', '".$password."')";

if ($conn->query($sql) === TRUE) {
    echo "{\"status\": \"success\"}";
} else {
    echo "{\"status\": \"error\"}";
}

$conn->close();

?>
