<html lang="en">
  <head>
    <title>Server Variables</title>
  </head>
  <body>
    <?php
      echo "Server details:<br/>";
      echo "SERVER_NAME: " $_SERVER['SERVER_NAME'] . "<br/>";
      echo "SERVER_ADDR: ";$_SERVER['SERVER_ADDR'] . "<br/>";
      echo "SERVER_PORT: ";$_SERVER['SERVER_PORT'] . "br/";
    ?>      
  </body>
</html>