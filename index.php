<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Beehive Prototype Home</title>
  <meta charset="UTF-8">
  <meta name="Bogdan Pshonyak" content="Bee Hive Data">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
 </head>
 <body>
 <?php
 
    include("views/nav.php");
    
    if(isset($_GET['success'])){
      echo '<div class="alert alert-success">';
      echo '<strong><span class="glyphicon glyphicon-ok"></span> Success! Your data has been added.</strong>';
      echo '</div>';
    }
 
 ?>
 
 <div class="container">
    <div class="row">
        <div class="center-block">
          <?php include("views/bee-info-form.php"); ?>
        </div>
    </div>
 </div>
 
 <script>
    <?php
      if(isset($_GET['success'])){
        echo '$(".alert-success").delay(3000).slideUp("slow");';
      }
    ?>
 </script>  
 </body>
</html>
