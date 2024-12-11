<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма с данными пользователя</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Получаем данные из формы
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        $salary = htmlspecialchars($_POST['salary']);

        // Выводим введенные данные
        echo "<p>Имя: $name</p>";
        echo "<p>Возраст: $age</p>";
        echo "<p>Зарплата: $salary</p>";
    }
    ?>

    <form method="post">
        <label for="name">Введите ваше имя: </label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="age">Введите ваш возраст: </label>
        <input type="number" id="age" name="age" required>
        <br><br>

        <label for="salary">Введите вашу зарплату: </label>
        <input type="number" id="salary" name="salary" required>
        <br><br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>
