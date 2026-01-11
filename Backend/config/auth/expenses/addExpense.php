<?php
include "../config/db.php";
session_start();

$data = json_decode(file_get_contents("php://input"), true);

$user_id = $_SESSION["uid"];
$title = $data["title"];
$amount = $data["amount"];
$category = $data["category"];

$conn->query("INSERT INTO expenses (user_id, title, amount, category)
              VALUES ('$user_id', '$title', '$amount', '$category')");
?>