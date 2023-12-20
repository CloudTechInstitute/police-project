<?php
$conn = mysqli_connect("localhost", "root", "", "gpedms");

if (!$conn) {
    die("Could not connect to the database: " . mysqli_connect_error());
}

$task = isset($_POST['task']) ? $conn->real_escape_string($_POST['task']) : '';
$officer = isset($_POST['officer']) ? $conn->real_escape_string($_POST['officer']) : '';
$description = isset($_POST['description']) ? $conn->real_escape_string($_POST['description']) : '';
$location = isset($_POST['location']) ? $conn->real_escape_string($_POST['location']) : '';
$date = date("Y-m-d");

$result = mysqli_query($conn, "INSERT INTO tasks (`task`, `officer`, `description`, `location`, `date`) VALUES('$task', '$officer','$description','$location', '$date')");

if ($result) {
    echo json_encode(["status" => "200", "message" => "Task assigned created"]);
} else {
    echo json_encode(["status" => "404", "message" => "Oops! Something went wrong: " . mysqli_error($conn)]);
}
