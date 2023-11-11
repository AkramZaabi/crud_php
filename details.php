<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">       
<style>

    .container{
            display:flex;
            height : 100vh;
            justify-content: center;
          
            place-items : center;

    }

</style>
</head>
<body>
    <?php      $pdo =    new PDO('mysql:host=localhost;dbname=todos','root','') ;
               $query =  $pdo->query('SELECT * FROM todos where id='.$_GET['id'] );
                $todo = $query->fetch();
             
              
    ?>
    <div class="container">
     
        <div class="card" style="width: 18rem;">
      <ul class="list-group list-group-flush">
     
        <li class="list-group-item">title : <?= $todo['title']?></li>
        <li class="list-group-item">description : <?= $todo['description']?></li>
        <li class="list-group-item">Date : <?= $todo['date']?></li>
        <li class="list-group-item"  style="background-color : <?=  $todo['completed'] ? 'green'  : 'red'   ?>" >state : <?= $todo['completed'] ? "completed" : " in process " ?></li>
      </ul>
    </div>
    </div>


</body>
</html>