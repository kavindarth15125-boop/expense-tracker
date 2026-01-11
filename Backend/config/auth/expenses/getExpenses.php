<?php
include "../config/db.php";
session_start();

$user_id = $_SESSION["uid"];

$result = $conn->query("SELECT * FROM expenses WHERE user_id='$user_id'");
$expenses = [];

while ($row = $result->fetch_assoc()) {
    $expenses[] = $row;
}

echo json_encode($expenses);
?>