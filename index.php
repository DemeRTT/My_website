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
            <div class="col-12 login">
                <h1>Авторизуйтесь!</h1>
                <?php
                if (!isset($_COOKIE['User'])) {
                    ?>
                    <h2>
                        <a href="/registration.php"><strong>Зарегистрируйтесь</strong></a> или <a
                            href="/login.php"><strong>войдите</strong></a>, чтобы
                        просматривать контент!
                    </h2>
                    <?php
                } else {
                    // подключение к БД
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>