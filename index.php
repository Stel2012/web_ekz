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
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="hello">
                            <?php 
                            //echo $_COOKIE['User'];
                            $link = mysqli_connect('db', 'root', '123456', 'web');
                            $username = $_COOKIE['User'];

                            $sql = "SELECT * FROM users WHERE username = '$username'";
                            //echo $sql;
                            $result = mysqli_query($link, $sql);

                            if ($result && mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                echo "<h1>Привет, " . $row['username'] . "!</h1>";
                            } else {
                                echo "<h1>Пользователь не найден!</h1>";
                            }
                            
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
    </div>
</div>

</body>
</html>