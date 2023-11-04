<?php 

            $pdo =new PDO('mysql:host=localhost;dbname=todos','root','') ;
               $query =  $pdo->query('SELECT * FROM todos ');
                $todos = $query->fetchAll();
?>