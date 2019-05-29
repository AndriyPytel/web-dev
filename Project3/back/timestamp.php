<!DOCTYPE html>

<html lang="en">
  <head>
    <title>timestamp</title>
  </head>
  <body>
    <?php
    $d=mktime(11, 14, 54, 8, 12, 2011);
    echo"<p>". "Created date is " . date("Y-m-d h:i:sa", $d)."</p>";
    ?>
  </body>
</html>
