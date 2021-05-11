<!doctype html>


<?php
require_once 'config.php';
$queryResult = $pdo->query("SELECT * FROM users");




?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" crossorigin="anonymous">
    <title>Conecion a base dedatos </title>
  </head>
  <body>

     
         
         <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Databases</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul>
         <li>
         <a href = "index.php" >home</a>
         </li>
         <li>
         <a href = "list.php" >List users</a>
         </li>
         <li>
         <a href = "add.php" >add user </a>
         </li>
         </ul>
     
    </div>
  </div>
</nav>
<div class = "container" >
<h1>listar usuarios!</h1>

<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
    </tr>
  </thead>
  <tbody>
  <?PHP
  while($row = $queryResult->fetch(PDO::FETCH_ASSOC)){

  
    echo '<tr>';
    echo '<td>'. $row['id'] .'</td>' ;
    echo '<td>'. $row['name'] .'</td>' ;
    echo '<td>'. $row['email'] .'</td>' ;
    echo '</tr>';
  }
  ?>
   
    
  </tbody>
</table>

         </div>


        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>