<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    session_destroy();
    unset($_SESSION['unique_id']);
}

header("location: login.html");
exit();
