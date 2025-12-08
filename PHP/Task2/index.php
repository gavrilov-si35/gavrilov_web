<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Задача 2: Арифметические операции и условные операторы</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="page">
    <header class="page__header header">
        <div class="header__container header__container--center">
            <h1 class="header__title">Задача 2: Арифметические операции и условные операторы</h1>
        </div>
    </header>

    <main class="page__main main">
        <div class="main__container main__container--narrow">
            <?php
            $num1 = 7;
            $num2 = 3;
            $sum = $num1 + $num2;
            $parity = ($sum % 2 === 0) ? 'чётное' : 'нечётное';
            ?>
            <div class="result">
                <p class="result__item">Число <span class="result__label">1</span>: <span class="result__value"><?php echo $num1; ?></span></p>
                <p class="result__item">Число <span class="result__label">2</span>: <span class="result__value"><?php echo $num2; ?></span></p>
                <p class="result__item">Сумма: <span class="result__value"><?php echo $sum; ?></span> — <span class="result__status"><?php echo $parity; ?></span> число.</p>
            </div>
        </div>
    </main>

    <footer class="page__footer footer">
        <div class="footer__container">
            <small class="footer__note">Задача 2: Арифметические операции и условные операторы</small>
        </div>
    </footer>
</body>

</html>