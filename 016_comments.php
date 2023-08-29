<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
      $index =1;
      // define an index
      /*for($i = 1; $i <= 5; $i++){
          echo "$i <br>";
        }// for loop*/
      $numbers = array(2, 11, 17, 23, 35, 47);
      for($i =0; $i < count($numbers); $i++){
          echo "$numbers[$i] <br>";
        }// another for loop


  ?>
  </body>
</html>
