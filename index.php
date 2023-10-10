<?php
require('config.php');

// Add a new task
if (isset($_POST['add_task'])) {
    $task = $_POST['task'];
    $query = "INSERT INTO tasks (task) VALUES ('$task')";
    mysqli_query($db, $query);
    header('Location: index.php');
}

// Mark a task as completed
if (isset($_GET['complete'])) {
    $id = $_GET['complete'];
    mysqli_query($db, "UPDATE tasks SET completed=1 WHERE id=$id");
    header('Location: index.php');
}

// Delete a task
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($db, "DELETE FROM tasks WHERE id=$id");
    header('Location: index.php');
}

// Retrieve tasks from the database
$tasks = mysqli_query($db, "SELECT * FROM tasks");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
    <h1>Task List</h1>
    <form method="post" action="index.php">
        <input type="text" name="task" required>
        <button type="submit" name="add_task">Add Task</button>
    </form>
    <ul>
        <?php while ($row = mysqli_fetch_array($tasks)) : ?>
            <li>
                <?php if ($row['completed']) : ?>
                    <del><?= $row['task'] ?></del>
                <?php else : ?>
                    <?= $row['task'] ?>
                <?php endif; ?>
                [<a href="index.php?complete=<?= $row['id'] ?>">Complete</a> |
                <a href="index.php?delete=<?= $row['id'] ?>">Delete</a>]
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
