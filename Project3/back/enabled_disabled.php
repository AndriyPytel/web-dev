<!DOCTYPE html>

<html lang="en">
<head>
    <title>enabled_disabled</title>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
$txt1="Cookies are enabled.";
$txt2="Cookies are disabled.";
if(count($_COOKIE) > 0) {
    echo "<p>" . $txt1 . "</p>";
} else {
    echo "<p>" . $txt2 . "</p>";
}
?>

</body>
</html>
