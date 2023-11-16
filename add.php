<?php   
      
         require "./0.5_db_connect/dbconnect.php";
        if(empty($_POST))
        {
            header('Location :  index.php');
            exit();
        }
         if(!empty( $_POST['title']) or  !empty($_POST['description'] or  !empty($_POST['date']) or !empty($_POST['completed'])))
         {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $completed = $_POST['completed'];
            // Use prepared statement to insert data
            $query = $pdo->prepare("INSERT INTO todos (title, description, date, completed) VALUES (?, ?, ?, ?)");
            $query->execute([$title, $description, $date, $completed]);
         }
         
         $template='add_todo' ;
         $page_title  =  'Add todo page  ';
          header("location:index.php?msg=1");
?>   