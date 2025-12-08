<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Задача 6: Фильтрация ассоциативного массива</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="page">
    <header class="page__header header">
        <div class="header__container header__container--center">
            <h1 class="header__title">Задача 6: Фильтрация ассоциативного массива</h1>
        </div>
    </header>

    <main class="page__main main">
        <div class="main__container main__container--narrow">
            <?php
            $products = [
                ['name' => 'Ручка', 'price' => 5, 'stock' => 100],
                ['name' => 'Ноутбук', 'price' => 1200, 'stock' => 10],
                ['name' => 'Блокнот', 'price' => 15, 'stock' => 50],
                ['name' => 'Мышь', 'price' => 45, 'stock' => 0],
                ['name' => 'Клавиатура', 'price' => 70, 'stock' => 20],
                ['name' => 'Карандаш', 'price' => 2, 'stock' => 200],
            ];

            $filtered = array_values(array_filter($products, function ($p) {
                return isset($p['price'], $p['stock']) && $p['price'] < 50 && $p['stock'] > 0;
            }));
            ?>
            <section class="products" aria-label="Отфильтрованные товары">
                <?php if (count($filtered) === 0): ?>
                    <div class="products__empty">Товары не найдены.</div>
                <?php else: ?>
                    <ul class="products__list">
                        <?php foreach ($filtered as $item): ?>
                            <li class="products__item">
                                <div class="product">
                                    <div class="product__meta">
                                        <span class="product__name"><?php echo htmlspecialchars((string)$item['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    </div>
                                    <div class="product__details">
                                        <span class="product__price">Цена: <strong><?php echo htmlspecialchars((string)$item['price'], ENT_QUOTES, 'UTF-8'); ?></strong> ₽</span>
                                        <span class="product__stock">В наличии: <strong><?php echo htmlspecialchars((string)$item['stock'], ENT_QUOTES, 'UTF-8'); ?></strong></span>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </section>
        </div>
    </main>

    <footer class="page__footer footer">
        <div class="footer__container">
            <small class="footer__note">Задача 6: Фильтрация ассоциативного массива</small>
        </div>
    </footer>
</body>

</html>