<html lang="en">
  <head>
    <title>Dates and Times: Unix</title>
  </head>
  <body>

    <?php
      echo time();
      echo "<br/>";
      echo mktime(2, 08, 45, 4, 18, 2017);
      echo "<br/>";
      //check date
      echo check_date(12, 31, 2017) ? 'true' : 'false';
      echo "<br/>";
      echo check_date(2, 31, 2017) ? 'true' : 'false';
      echo "<br/>";
      
      $unix_timestamp = strtotime("now"); //now, "+1 day", "last Monday", "15 September 2004" "September 15 2004"
      echo $unix_timestamp . "<br/>";
    ?>     
  </body>
</html>