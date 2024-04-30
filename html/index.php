<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Корнев Д.А.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                if (!isset($_COOKIE['User'])) {
                    ?>
                    <div class="login">
                        <h1>Авторизуйтесь!</h1>
                    </div>
                    <h3>
                        <a href="/registration.php"><strong>Зарегистрируйтесь</strong></a> или <a
                            href="/login.php"><strong>войдите</strong></a>, чтобы
                        просматривать контент!
                    </h3>
                    <?php
                } else {
                    ?>
                    <div class="login">
                        <h1>Страница постов</h1>
                    </div>
                    <?php
                    $link = mysqli_connect('db', 'root', 'kali', 'first_db');
                    $sql = "SELECT * FROM posts";
                    $res = mysqli_query($link, $sql);
                    if (mysqli_num_rows($res) > 0) {
                        while ($post = mysqli_fetch_array($res)) {
                            echo "<a href='/posts.php?id=" . $post["id"] . "'>" . $post['title'] . "</a><br>";
                        }
                    } else {
                        echo "Записей ещё нет";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
