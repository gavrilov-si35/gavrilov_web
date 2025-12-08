<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Задача 4: Работа с ассоциативными массивами и foreach</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="page">
    <header class="page__header header">
        <div class="header__container header__container--center">
            <h1 class="header__title">Задача 4: Работа с ассоциативными массивами и foreach</h1>
        </div>
    </header>

    <main class="page__main main">
        <div class="main__container main__container--narrow">
            <?php
            $users = [
                ['name' => 'Анна', 'age' => 28, 'city' => 'Москва'],
                ['name' => 'Борис', 'age' => 34, 'city' => 'Санкт-Петербург'],
                ['name' => 'Виктор', 'age' => 22, 'city' => 'Казань']
            ];
            ?>
            <section class="users" aria-label="Список пользователей">
                <ul class="users__list">
                    <?php foreach ($users as $user): ?>
                        <li class="users__item">
                            <span class="users__label">Имя:</span>
                            <span class="users__value"><?php echo htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <span class="users__label">Возраст:</span>
                            <span class="users__value"><?php echo htmlspecialchars((string)$user['age'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <span class="users__label">Город:</span>
                            <span class="users__value"><?php echo htmlspecialchars($user['city'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>
    </main>

    <footer class="page__footer footer">
        <div class="footer__container">
            <small class="footer__note">Задача 4: Работа с ассоциативными массивами и foreach</small>
        </div>
    </footer>
</body>

</html>