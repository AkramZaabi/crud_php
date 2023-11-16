<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect db</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">       

</head>
<body>
<?php  
       require "./0.5_db_connect/dbconnect.php";
       $query = $pdo->prepare("SELECT * FROM todos");
       $query->execute();
       $todos = $query->fetchAll();
      
    ?> 
    <div class="container py-4">
    
    <h1>Liste des Taches</h1>
   <a href="add.phtml"> <button class="btn btn-primary">
        ajouter Etudiant
      </button></a>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">
   <?php  foreach( $todos as $todo) : ?>

    <tr>
    <th scope="row"><input type="checkbox" <?= $todo['completed'] ?'checked' : '' ?>> </th>
      <td class="<?= $todo['completed'] ?'text-decoration-line-through' :''?>"><?= $todo['title'] ?></td>
      <td><a href="details.php?id=<?=$todo['id']; ?>" class="btn btn-primary"><i class="bi bi-pass-fill"></i></a>
      <a class="btn btn-warning" href="update.php?id=<?=$todo['id']; ?>"><i class="bi bi-pencil-square"></i></a>
      <a class="btn btn-danger" href="delete.php?id=<?=$todo['id']; ?>"><i class="bi bi-trash3"></i></a></td>


   </tr>

    <?php  endforeach;  ?>
  </tbody>
</table>
    </div>
    <!-- Button trigger modal -->

<!-- Modal -->

</body>
</html>
