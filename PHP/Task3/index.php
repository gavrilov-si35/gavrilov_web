<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Задача 3: Цикл for и простая функция</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="page">
    <header class="page__header header">
        <div class="header__container header__container--center">
            <h1 class="header__title">Задача 3: Цикл for и простая функция</h1>
        </div>
    </header>

    <main class="page__main main">
        <div class="main__container main__container--narrow">
            <section class="numbers" aria-label="Список чисел">
                <?php
                function printNumbers($start, $end)
                {
                    for ($i = $start; $i <= $end; $i++) {
                        echo '<p class="numbers__item">' . htmlspecialchars((string)$i, ENT_QUOTES, 'UTF-8') . '</p>';
                    }
                }

                printNumbers(1, 10);
                ?>
            </section>
        </div>
    </main>

    <footer class="page__footer footer">
        <div class="footer__container">
            <small class="footer__note">Задача 3: Цикл for и простая функция</small>
        </div>
    </footer>
</body>

</html>