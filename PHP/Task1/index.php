<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Задача 1: "Hello, World!" с переменной</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="page">
    <header class="page__header header">
        <div class="header__container header__container--center">
            <h1 class="header__title">Задача 1: "Hello, World!" с переменной</h1>
        </div>
    </header>

    <main class="page__main main">
        <div class="main__container main__container--narrow">
            <?php
            $name = "Иван";
            $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
            ?>
            <p class="greeting greeting--primary">Привет, <?php echo $safeName; ?>!</p>
        </div>
    </main>

    <footer class="page__footer footer">
        <div class="footer__container">
            <small class="footer__note">Задача 1: "Hello, World!" с переменной</small>
        </div>
    </footer>
</body>

</html>