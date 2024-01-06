<?php
$conn = mysqli_connect("localhost", "root", "", "gpedms");
if (!$conn) {
    echo "Database connection error" . mysqli_connect_error();
}
