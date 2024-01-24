<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пример письма</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap">
    <style>
        /* Общие стили для письма */
        body {
            font-family: 'Inter', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Стили для таблицы */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Стили для заголовков */
        h1, h2 {
            margin-bottom: 15px;
        }

        /* Стили для столбца цены */
        td:nth-child(4),
        td:nth-child(5) {
            word-break: break-all;
        }

        /* Медиа-запросы для адаптации под различные устройства */
        @media (max-width: 600px) {
            h1 {
                font-size: 24px;
            }
            h2 {
                font-size: 20px;
            }
            table {
                font-size: 14px;
            }
        }

        @media (max-width: 400px) {
            h1 {
                font-size: 20px;
            }
            h2 {
                font-size: 18px;
            }
            table {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
<div>
    <h1>Здравствуйте, {{ $name }}!</h1>
    <p>Спасибо за ваш заказ в нашем интернет-магазине.</p>
    <h2>Информация о заказе:</h2>
    <table>
        <thead>
        <tr>
            <th>Фото товара</th>
            <th>Название товара</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Стоимость</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->products as $product)
            <tr>
                <td><img src="https://id-store.ru/upload/resize_cache/iblock/3b8/704_692_1/d1ndzxym6383txz5zeygq04t4bxtvtxy.png" alt="Фото товара"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->pivot->count }}</td>
                <td>{{ $product->price }} ₽</td>
                <td>{{ $product->getPriceForCount() }} ₽</td>
            </tr>
        @endforeach
        <!-- Дополнительные товары здесь -->
        </tbody>
    </table>
    <p><strong>Общая стоимость: {{ $fullSum}} ₽</strong></p>
    <p>Спасибо за ваш заказ. Пожалуйста, ожидайте доставку.</p>
    <p>С уважением,<br>5G Store</p>
</div>
</body>
</html>

