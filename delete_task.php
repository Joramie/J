<?php
include 'function.php';

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];
    echo deleteTask($task_id);
    header('Location: index.php');  // Redirect back to the main page
    exit();
}
?>
