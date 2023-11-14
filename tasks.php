<?php
$tasks = [];

// Handle adding tasks
if (isset($_POST['addTask'])) {
    $task = $_POST['task'];
    if (!empty($task)) {
        $tasks[] = $task;
    }
}

// Handle removing tasks
if (isset($_GET['removeTask'])) {
    $index = $_GET['removeTask'];
    if (isset($tasks[$index])) {
        unset($tasks[$index]);
    }
}

// Display tasks
if (!empty($tasks)) {
    echo '<ul>';
    foreach ($tasks as $index => $task) {
        echo '<li>' . htmlspecialchars($task) . ' <a href="?removeTask=' . $index . '">Remove</a></li>';
    }
    echo '</ul>';
} else {
    echo '<p>No tasks yet.</p>';
}
?>
