<html lang="en">
  <head>
    <title>Referance as Arguments</title>
  </head>
  <body>
    <?php
      
      function test1($&val){
          $val = $val*2;
      }
      
      $a = 10;
      echo test1($a);
      
      
    ?>      
  </body>
</html>