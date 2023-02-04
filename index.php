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
   $NataleInCrociera = new Movies('Natale In Crociera', 'Aurelio De Laurentiis', '2007','Cinepanettone');
   $BikerBoyz = new Movies('Biker Boyz', 'Stephanie Allain', '2003','Azione');
   $ChiedimiSeSonoFelice = new Movies('Chiedimi Se Sono Felice', 'Aldo, Giovanni e Giacomo', '2000','Comico');
   $CosièLaVita = new Movies('Cosi è la vita', 'Aldo, Giovanni e Giacomo', '1998','Comico');

   echo '<h3>';
      echo $NataleInIndia->toPrintAll();
   echo '</h3>';

   echo '<h3>';
      echo $NataleInIndia->toPrintAll();
   echo '</h3>';

   echo '<h3>';
      echo $NataleInCrociera->toPrintAll();
   echo '</h3>';

   echo '<h3>';
      echo $BikerBoyz->toPrintAll();
   echo '</h3>';

   echo '<h3>';
      echo $ChiedimiSeSonoFelice->toPrintAll();
   echo '</h3>';

   echo '<h3>';
      echo $CosièLaVita->toPrintAll();
   echo '</h3>';

   ?>
   </body>
</html>