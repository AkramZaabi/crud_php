
<?php  
       require "./0.5_db_connect/dbconnect.php";
       $query = $pdo->prepare("SELECT * FROM todos");
       $query->execute();
       $todos = $query->fetchAll();
       $template='index';
       
      include './layout.phtml';
    ?> 
    