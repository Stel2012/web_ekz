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
<div class="container">
    <div class="row">
        <div class="col-12 index">
            <h1 class="nav_text">Страница приветствия</h1>
        


        <?php
        if (!isset($_COOKIE['User'])) {
        ?>
            <a href="/rega.php">Зарегистрируйтесь</a> или <a href="/login.php">войдите</a>, чтобы просматривать контент!
        <?php
        } else {

            $link = mysqli_connect('127.0.0.1', 'root', '123456', 'web');

            $sql = "SELECT * FROM users";
            $res = mysqli_query($link, $sql);
            if (mysqli_num_rows($res) >  0) {
                while ($usr = mysqli_fetch_array($res)) {
                    echo "<a href='/hello.php?id=" . $usr["id"] . "'>" . $usr['username'] . "</a><br>";
                }
               } else {
                    echo "УЗ пока нет";
               }
        }
        ?>
        </div>
    </div>
</div>

</body>
</html>