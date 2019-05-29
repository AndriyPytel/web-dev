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
echo "<p>"."Get session:"."</p>";
echo "<p>"."Session data: " . $_SESSION["session"] . ".<br>"."</p>";
?>
<br><br>
<form action="../pages/get_modify.html">
      <input type="submit" value="Back" name="submit">
    </form>

</body>
</html>
