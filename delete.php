<?php
    require "./0.5_db_connect/dbconnect.php";

    $query = $pdo->prepare("delete  from todos where id=:id");
    $query->execute([
        'id'=>$_GET['id']
    ]);
    $todos = $query->fetchAll();
   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>

       if(confirm("Vous étes sur que vous voulez effacer cette tache ? "))
       {
        $query = $pdo->query("DELETE FROM todos WHERE id = " . $_GET['id']);
       }
       <?=header("location:index.php?msg=1");?>
    
    </script>

</body>
</html>