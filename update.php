<?php

require "./0.5_db_connect/dbconnect.php";


if (!empty($_POST['title']) || !empty($_POST['description']) || !empty($_POST['date']) || !empty($_POST['completed'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $completed = $_POST['completed'];
    // Get the id value (you may need to validate and sanitize it)
    $id = $_POST['id'];

    // Use prepared statement to update data
    $query = $pdo->prepare("UPDATE todos SET title=:title, description=:description, date=:date, completed=:completed WHERE id=:id");
    $query->bindParam(':title', $title);
    $query->bindParam(':description', $description);
    $query->bindParam(':date', $date);
    $query->bindParam(':completed', $completed);
    $query->bindParam(':id', $id);
    $query->execute();
    header('Location: index.php');
}

// Use prepared statements to prevent SQL injection
$query = $pdo->prepare("SELECT * FROM todos WHERE id = :id");
$query->bindParam(':id', $_GET['id']);
$query->execute();
$todo = $query->fetch();
$template = 'update';
$page_title = 'Edit todo page';
include './layout.phtml';

?>
