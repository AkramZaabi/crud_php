<?php   
         
         require "./0.5_db_connect/dbconnect.php";

         $title = $_GET['title'];
          $description = $_GET['description'];
          $date = $_GET['date'];
          $completed = $_GET['completed'];
          
          // Use prepared statement to insert data
          $query = $pdo->prepare("INSERT INTO todos (title, description, date, completed) VALUES (?, ?, ?, ?)");
          $query->execute([$title, $description, $date, $completed]);
          
          header("location:index.php?msg=1");
?>   