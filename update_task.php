<?php
include 'function.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $task_id = $_GET['id'];
    $status = $_GET['status'];
    echo updateTaskStatus($task_id, $status);
    header('Location: index.php');  // Redirect back to the main page
    exit();
}
?>
