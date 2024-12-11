<?php
  $link = mysqli_connect('db', 'root', '123456', 'web');
  $id = $_GET['id'];
  $sql = "SELECT * FROM users WHERE id=$id";
  $res = mysqli_query($link, $sql);
  $rows = mysqli_fetch_array($res);
  $usr = $rows['username'];
?>


<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta charset="utf-8">
    <title>Галченко А.В.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="style.css">
</html>
<body>
    <?php
        echo "<p>Привет, $usr!</p>";
    ?>
</body>
</html>
