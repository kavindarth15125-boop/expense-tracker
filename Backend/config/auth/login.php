<?php
include "../config/db.php";
session_start();

$data = json_decode(file_get_contents("php://input"), true);

$email = $data["email"];
$password = $data["password"];

$result = $conn->query("SELECT * FROM users WHERE email='$email'");
$user = $result->fetch_assoc();

if (password_verify($password, $user["password"])) {
    $_SESSION["uid"] = $user["id"];
    echo "success";
}
?>