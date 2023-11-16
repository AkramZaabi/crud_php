<?php 

            $pdo =new PDO('mysql:host=localhost;dbname=test','root','') ;
               $query =  $pdo->query('SELECT * FROM todos ');
                $todos = $query->fetchAll();
?>