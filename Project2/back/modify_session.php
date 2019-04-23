<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>get_modify</title>
  </head>
  <body>

    <?php
    $_SESSION["session"] = "new";
    print_r($_SESSION);
    ?>
  </body>
</html>
