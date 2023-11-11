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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" style="float:right;" id="ajout_etudiant"
        data-bs-target="#staticBackdrop">
        ajouter Etudiant
      </button>

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
      <a class="btn btn-warning" href="update.php?id=<?=$todo['id']; ?>"><button class="bi bi-pencil-square"></i></a>
      <a class="btn btn-danger" href="delete.php?id=<?=$todo['id']; ?>"><i class="bi bi-trash3"></i></a></td>


   </tr>

    <?php  endforeach;  ?>
  </tbody>
</table>
    </div>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade modal-dialog modal-dialog-centered" id="staticBackdrop" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ajouter tache</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="GET" action="add.php">
      
          
                <input type="text" class="form-control" id="prenom" name="title" required placeholder="title tache"
                  aria-label="title">
              
                <input type="date" class="form-control" id="date" name="date" required placeholder="choisir date">
            
        
          
            <label for="description" class="form-label" >Description</label>
            <input type="text" class="form-control" name="description" id="date" required aria-describedby="emailHelp" >

        
         
        
          <select class="form-select" name="completed" aria-label="Default select example">
            <option selected>completed or not!</option>
            <option value="0">0</option>
            <option value="1">1</option>
          </select>
     
          

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"
              data-bs-dismiss="modal">Submit</button>
          </div>

   </form>
        </div>
      </div>
    </div>

  </div>
 
</body>
</html>
