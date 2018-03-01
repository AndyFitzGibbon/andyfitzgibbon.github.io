<?php

require 'connection.php';
$conn    = Connect();
$first    = $conn->real_escape_string($_POST['first']);
$last   = $conn->real_escape_string($_POST['last']);
$email    = $conn->real_escape_string($_POST['email']);
$telephone = $conn->real_escape_string($_POST['telephone']);
$street    = $conn->real_escape_string($_POST['street']);
$suburb    = $conn->real_escape_string($_POST['suburb']);
$query   = "INSERT into tb_cform (first,last,email,telephone,street,suburb) VALUES('" . $first . "','" . $last . "','" . $email . "','" . $telephone . "','" . $street . "','" . $suburb . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "Thank You For Registering With POPCO <br>";

$conn->close();

?>