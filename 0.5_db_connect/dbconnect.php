<?php 

            $pdo =new PDO('mysql:host=localhost;dbname=todo-app','root','') ;
               $query =  $pdo->query('SELECT * FROM todos ');
                $todos = $query->fetchAll();
?>