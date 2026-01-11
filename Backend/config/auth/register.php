<?php
include "../config/db.php";

$data = json_decode(file_get_contents("php://input"), true);

$name = $data["name"];
$email = $data["email"];
$password = password_hash($data["password"], PASSWORD_DEFAULT);

$conn->query("INSERT INTO users (name, email, password) 
              VALUES ('$name', '$email', '$password')");
?>