<!DOCTYPE html>

<html lang="en">
  <head>
    <title>timezone</title>
  </head>
  <body>
    <?php
    date_default_timezone_set($_GET["name"]);
    echo "<p>"."The time is " . date("h:i:sa")."</p>";
    ?>
  </body>
</html>
