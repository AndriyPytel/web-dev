<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>destroy</title>
</head>
<body>

<?php
// remove all session variables
session_unset();
// destroy the session
session_destroy();
echo "<p>". "Session has destroyed."."</p>";
?>

</body>
</html>
