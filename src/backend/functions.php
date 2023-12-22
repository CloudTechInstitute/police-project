<?php
$conn = mysqli_connect("localhost", "root", "", "gpedms");
if (!$conn) {
    die("Could not connect to the database: " . mysqli_connect_error());
}
$query = mysqli_query($conn, "SELECT * FROM tasks");
if (mysqli_num_rows($query) > 0) {
    echo json_encode(["status" => "200", "message" => "login succesful"]);
} else {
    echo json_encode(["status" => "404", "message" => "user not found"]);

}
