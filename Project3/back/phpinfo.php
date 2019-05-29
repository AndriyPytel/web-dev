<!DOCTYPE html>

<html lang="en">
  <head>
    <title>phpinfo</title>
  </head>
  <body>
    <?php

    // Show all information, defaults to INFO_ALL
    phpinfo();

    // Show just the module information.
    // phpinfo(8) yields identical results.
    phpinfo(INFO_MODULES);
    ?>
  </body>
</html>
