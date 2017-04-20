<html lang="en">
  <head>
    <title>Referance Assignment</title>
  </head>
  <body>
    <?php
      
      $a = 1;
      $b = $a;
      $b = 2;
      echo "{$a} . / . {$b} . <br/>"
          //returns 1/2
          
      $a = 1;
      $b =& $a;
      $b = 2;
      echo "{$a} . / . {$b} . <br/>"
          //returns 2/2
          
      unset($b);
      echo "{$a} . / . {$b} . <br/>"
          //returns 2/
      
    ?>      
  </body>
</html>