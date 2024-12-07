<?php
include 'function.php';

if (isset($_POST['task_name'])) {
    $task_name = $_POST['task_name'];
    echo addTask($task_name);
    header('Location: index.php');  // Redirect back to the main page
    exit();
}
?>
