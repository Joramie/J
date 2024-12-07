<?php
include 'db.php';

function addTask($task_name) {
    global $conn;
    $task_name = $conn->real_escape_string($task_name); // Prevent SQL injection
    $sql = "INSERT INTO tasks (task_name) VALUES ('$task_name')";
    
    if ($conn->query($sql) === TRUE) {
        return "New task created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

function getTasks() {
    global $conn;
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);
    $tasks = [];
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
    }
    
    return $tasks;
}

function updateTaskStatus($task_id, $is_completed) {
    global $conn;
    $sql = "UPDATE tasks SET is_completed = $is_completed WHERE id = $task_id";
    
    if ($conn->query($sql) === TRUE) {
        return "Task updated successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

function deleteTask($task_id) {
    global $conn;
    $sql = "DELETE FROM tasks WHERE id = $task_id";
    
    if ($conn->query($sql) === TRUE) {
        return "Task deleted successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
