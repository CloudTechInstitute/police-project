<?php
$conn = mysqli_connect("localhost", "root", "", "gpedms");
if (!$conn) {
    die("Could not connect to the database: " . mysqli_connect_error());
}
$username = isset($_POST['staff_id']) ? $_POST['staff_id'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$query = mysqli_query($conn, "SELECT * FROM users WHERE `staff_id` = '$username' AND `password` = '$password'");
if (mysqli_num_rows($query) > 0) {
    echo json_encode(["status" => "200", "message" => "login succesful"]);
} else {
    echo json_encode(["status" => "404", "message" => "user not found"]);

}
