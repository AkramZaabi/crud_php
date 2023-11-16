<?php
require "./0.5_db_connect/dbconnect.php";

// Use prepared statements to prevent SQL injection
$query = $pdo->prepare("SELECT * FROM todos WHERE id = :id");
$query->bindParam(':id', $_GET['id']);
$query->execute();
$todos = $query->fetchAll();
$template = 'edit_todo';
$page_title = 'Edit todo page';
include './update.phtml';
?>
