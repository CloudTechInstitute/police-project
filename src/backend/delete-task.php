<?php
$conn = mysqli_connect("localhost", "root", "", "gpedms");

if (isset($_POST["taskId"])) {
    $taskId = filter_var($_POST["taskId"], FILTER_SANITIZE_NUMBER_INT);

    $deleteQuery = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $deleteQuery->bind_param("i", $taskId);
    $success = $deleteQuery->execute();
    $conn->close();

    if ($success) {
        $response = array("status" => 200, "message" => "Task deleted successfully");
    } else {
        $response = array("status" => 500, "message" => "Error deleting task");
    }

    header("Content-Type: application/json");
    echo json_encode($response);
} else {
    $response = array("status" => 400, "message" => "Task ID not provided");
    header("Content-Type: application/json");
    echo json_encode($response);
}
