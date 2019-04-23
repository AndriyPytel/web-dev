<!DOCTYPE html>

<html lang="en">
<head>
    <title>create_retrieve</title>
<?php
$cookie_name = $_GET["name"];
$cookie_value = $_GET["value"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 10), "/");
?>
<html>
<body>

<?php
$text1="Cookie is not set!";
$text2=" - this cookie is set!";
if(!isset($_COOKIE[$cookie_name])) {
    echo  "<p>". $text1. "</p>";
} else {
    echo "<p>" . $cookie_name . $text2. "</p>";
    echo "<p>" . "Value is: " . $_COOKIE[$cookie_name]. "</p>";
}
?>

</body>
</html>
