<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Задача 5: Калькулятор простых операций</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="page">
    <header class="page__header header">
        <div class="header__container header__container--center">
            <h1 class="header__title">Задача 5: Калькулятор простых операций</h1>
        </div>
    </header>

    <main class="page__main main">
        <div class="main__container main__container--narrow">
            <?php
            $resultText = '';
            $errorText = '';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $rawNum1 = $_POST['num1'] ?? '';
                $rawNum2 = $_POST['num2'] ?? '';
                $operation = $_POST['operation'] ?? '';

                $num1 = is_numeric($rawNum1) ? (float)$rawNum1 : null;
                $num2 = is_numeric($rawNum2) ? (float)$rawNum2 : null;

                if ($num1 === null || $num2 === null) {
                    $errorText = 'Оба поля должны содержать числа.';
                } else {
                    switch ($operation) {
                        case 'add':
                            $res = $num1 + $num2;
                            $op = '+';
                            break;
                        case 'subtract':
                            $res = $num1 - $num2;
                            $op = '-';
                            break;
                        case 'multiply':
                            $res = $num1 * $num2;
                            $op = '×';
                            break;
                        case 'divide':
                            $op = '÷';
                            if ($num2 == 0.0) {
                                $errorText = 'Деление на ноль невозможно.';
                                $res = null;
                            } else {
                                $res = $num1 / $num2;
                            }
                            break;
                        default:
                            $errorText = 'Неверная операция.';
                            $res = null;
                    }

                    if ($errorText === '' && $res !== null) {
                        $displayNum1 = (string)$num1;
                        $displayNum2 = (string)$num2;
                        if (intval($res) == $res) {
                            $displayRes = (string)intval($res);
                        } else {
                            $displayRes = rtrim(rtrim(number_format($res, 8, '.', ''), '0'), '.');
                        }
                        $resultText = htmlspecialchars($displayNum1, ENT_QUOTES, 'UTF-8') . ' ' . $op . ' ' . htmlspecialchars($displayNum2, ENT_QUOTES, 'UTF-8') . ' = ' . htmlspecialchars($displayRes, ENT_QUOTES, 'UTF-8');
                    }
                }
            }

            $preserveNum1 = isset($_POST['num1']) ? htmlspecialchars($_POST['num1'], ENT_QUOTES, 'UTF-8') : '';
            $preserveNum2 = isset($_POST['num2']) ? htmlspecialchars($_POST['num2'], ENT_QUOTES, 'UTF-8') : '';
            $preserveOp = isset($_POST['operation']) ? htmlspecialchars($_POST['operation'], ENT_QUOTES, 'UTF-8') : 'add';
            ?>
            <form class="calc" action="" method="post" novalidate>
                <div class="calc__row">
                    <label class="calc__label">
                        <span class="calc__label-text">Первое число</span>
                        <input class="calc__input" type="number" name="num1" step="any" placeholder="Первое число" required value="<?php echo $preserveNum1; ?>">
                    </label>
                </div>

                <div class="calc__row">
                    <label class="calc__label">
                        <span class="calc__label-text">Операция</span>
                        <select class="calc__select" name="operation" required>
                            <option class="calc__option" value="add" <?php echo $preserveOp === 'add' ? 'selected' : ''; ?>>+</option>
                            <option class="calc__option" value="subtract" <?php echo $preserveOp === 'subtract' ? 'selected' : ''; ?>>-</option>
                            <option class="calc__option" value="multiply" <?php echo $preserveOp === 'multiply' ? 'selected' : ''; ?>>×</option>
                            <option class="calc__option" value="divide" <?php echo $preserveOp === 'divide' ? 'selected' : ''; ?>>÷</option>
                        </select>
                    </label>
                </div>

                <div class="calc__row">
                    <label class="calc__label">
                        <span class="calc__label-text">Второе число</span>
                        <input class="calc__input" type="number" name="num2" step="any" placeholder="Второе число" required value="<?php echo $preserveNum2; ?>">
                    </label>
                </div>

                <div class="calc__row calc__row--actions">
                    <button class="calc__button" type="submit">Вычислить</button>
                </div>
            </form>

            <?php if ($errorText !== ''): ?>
                <div class="result result--error" role="status" aria-live="polite"><?php echo htmlspecialchars($errorText, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php elseif ($resultText !== ''): ?>
                <div class="result result--ok" role="status" aria-live="polite"><?php echo $resultText; ?></div>
            <?php endif; ?>
        </div>
    </main>

    <footer class="page__footer footer">
        <div class="footer__container">
            <small class="footer__note">Задача 5: Калькулятор простых операций</small>
        </div>
    </footer>
</body>

</html>