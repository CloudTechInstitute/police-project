<?php
$conn = mysqli_connect("localhost", "root", "", "gpedms");

if (!$conn) {
    die("Could not connect to the database: " . mysqli_connect_error());
}

$query = mysqli_query($conn, "SELECT * FROM tasks");

if ($query) {
    $tasks = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $tasks[] = $row;
    }

    if (!empty($tasks)) {
        echo json_encode(["status" => "200", "message" => "Data fetched successfully", "tasks" => $tasks]);
    } else {
        echo json_encode(["status" => "404", "message" => "No tasks found"]);
    }
} else {
    echo json_encode(["status" => "500", "message" => "Query failed: " . mysqli_error($conn)]);
}
