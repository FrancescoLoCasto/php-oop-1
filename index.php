<?php
  require_once __DIR__ . '/models/Movie.php';
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>OOP</title>
   </head>
   <body>

   <h1>
      OOP PHP
   </h1>

   <?php 

   $NataleInIndia = new Movies('Natale In India', 'Aurelio De Laurentiis', '2003','Cinepanettone');

   echo $NataleInIndia->toPrintAll()


   ?>
   </body>
</html>