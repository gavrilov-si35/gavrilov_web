<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Задача 7: Генерация случайных паролей</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="page">
    <header class="page__header header">
        <div class="header__container header__container--center">
            <h1 class="header__title">Задача 7: Генерация случайных паролей</h1>
        </div>
    </header>

    <main class="page__main main">
        <div class="main__container main__container--narrow">
            <?php
            function generatePassword($length)
            {
                $length = (int)$length;
                if ($length <= 0) {
                    return '';
                }
                $lower = range('a', 'z');
                $upper = range('A', 'Z');
                $digits = range('0', '9');
                $all = array_merge($lower, $upper, $digits);

                $password = [];

                if ($length >= 3) {
                    $password[] = $lower[random_int(0, count($lower) - 1)];
                    $password[] = $upper[random_int(0, count($upper) - 1)];
                    $password[] = $digits[random_int(0, count($digits) - 1)];
                    $remaining = $length - 3;
                } else {
                    $remaining = $length;
                }

                for ($i = 0; $i < $remaining; $i++) {
                    $password[] = $all[random_int(0, count($all) - 1)];
                }

                for ($i = count($password) - 1; $i > 0; $i--) {
                    $j = random_int(0, $i);
                    $tmp = $password[$i];
                    $password[$i] = $password[$j];
                    $password[$j] = $tmp;
                }

                return implode('', $password);
            }

            $generated = '';
            $error = '';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $raw = $_POST['length'] ?? '';
                if (is_numeric($raw)) {
                    $len = (int)$raw;
                    if ($len < 1 || $len > 128) {
                        $error = 'Длина должна быть от 1 до 128.';
                    } else {
                        $generated = generatePassword($len);
                    }
                } else {
                    $error = 'Введите число для длины пароля.';
                }
            } else {
                $generated = generatePassword(10);
            }
            ?>
            <form class="pw" action="" method="post" novalidate>
                <div class="pw__row">
                    <label class="pw__label">
                        <span class="pw__label-text">Длина пароля</span>
                        <input class="pw__input" type="number" name="length" min="1" max="128" value="<?php echo isset($len) ? htmlspecialchars((string)$len, ENT_QUOTES, 'UTF-8') : '10'; ?>" required>
                    </label>
                </div>

                <div class="pw__row pw__row--actions">
                    <button class="pw__button" type="submit">Сгенерировать</button>
                </div>
            </form>

            <?php if ($error !== ''): ?>
                <div class="pw__result pw__result--error" role="status" aria-live="polite"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php elseif ($generated !== ''): ?>
                <div class="pw__result pw__result--ok" role="status" aria-live="polite"><?php echo htmlspecialchars($generated, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endif; ?>
        </div>
    </main>

    <footer class="page__footer footer">
        <div class="footer__container">
            <small class="footer__note">Задача 7: Генерация случайных паролей</small>
        </div>
    </footer>
</body>

</html>