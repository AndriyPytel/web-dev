<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>start</title>
  </head>
  <body>

    <?php
    // Set session variables
    $_SESSION["session"] = "something";
    echo "<p>". "Session variables are set."."</p>";
    ?>
  </body>
</html>
