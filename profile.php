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
    <div class="container navigate_bar">
        <div class="row">
            <div class="row">
                <div class="col-2 navigate_logo"></div>
                <div class="col-10">
                    <div class="navigate_text">
                        <strong>Информация обо мне!</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-7">
                <p>Я, <strong>Корнев Дмитрий Александрович</strong>, обучающийся в <strong>РТУ МИРЭА</strong> на
                    направление <strong>компьютерная безопасность</strong>,
                    на
                    данный
                    момент являюсь студентом 2 курса. <strong>Безумно заинтересован</strong> в том, чтобы пройти
                    сначала
                    на второй, а
                    затем уже и на третий этап стажировки <strong>в Positive Technologies</strong>. Для этого буду
                    прикладывать все
                    возможные усилия, обучаться новому и применять эти знания на практике.
                </p>
                <h2>Вот почему именно я должен попасть к вам на стажировку:</h2>
                <ul>
                    <li>Мне нравится преодолевать трудности</li>
                    <li>Мне хочется изучать что-то новое и адаптироваться к поставленным задачам</li>
                    <li>Я буду рад завести новые знакомства и прислушиваться к дельным советам</li>
                </ul>
            </div>
            <div class="col-5">
                <div class="row my_photo"></div>
                <div class="row">
                    <p class="title_photo"><strong>Корнев Дмитрий Александрович</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Click here!</button>
                <p id="hacked"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">
                <form method="POST" action="profile.php">
                    <input class="form" type="text" name="title" placeholder="Заголовок вашего поста">
                    <textarea class="form down_text" name="text" cols="30" rows="10"
                        placeholder="Введите текст вашего поста ..."></textarea>
                    <div><button type="submit" class="btn_post" name="submit">Сохранить пост</button></div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>

</html>

<?php
require_once ('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first_db');

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $main_text = $_POST['text'];
    if (!$title || !$main_text)
        die("Заполните все поля!");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if (!mysqli_query($link, $sql))
        die("Не удалось добавить пост");
}

?>