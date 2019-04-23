<!DOCTYPE html>

<html lang="en">
  <head>
    <title>modify_delete</title>
  </head>
  <?php
  // set the expiration date to one hour ago
  $cookie_name = "cookie";
  setcookie($cookie_name, "", time() - 3600);
  ?>

  <body>

    <?php
    echo "<p>". "Cookie is deleted." . "</p>";
    ?>

  </body>
</html>
