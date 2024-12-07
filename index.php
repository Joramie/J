<?php
include 'function.php';

$tasks = getTasks();  // Get tasks from the database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <h2>Add New Task</h2>
    <form action="add_task.php" method="POST">
        <input type="text" name="task_name" placeholder="Enter task" required>
        <button type="submit">Add Task</button>
    </form>

    <h2>Tasks</h2>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php echo $task['task_name']; ?> 
                - <?php echo $task['is_completed'] ? 'Completed' : 'Not completed'; ?>
                <a href="update_task.php?id=<?php echo $task['id']; ?>&status=<?php echo $task['is_completed'] ? 0 : 1; ?>">Toggle Status</a>
                <a href="delete_task.php?id=<?php echo $task['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
