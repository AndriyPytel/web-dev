<!DOCTYPE html>

<html lang="en">
<head>
    <title>file_upload</title>
</head>
<body>
    <?php
$target_dir = "D:/Projects/Labki/web-dev/Project2/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;


// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $uploadOk = 0;
}
$txt1="File was not uploaded.";
$txt2=" - has been uploaded.";
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<p>" . $txt1 . "</p>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<p>". basename( $_FILES["fileToUpload"]["name"]). $txt2 . "</p>" ;
    } else {
        echo "<p>" . $txt1 . "</p>";
    }
}
?>
</body>
</html>
