<!DOCTYPE html>
<html lang="ru">
<?php require_once "www/start.php"; ?> <!-- Подключаем start.php -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Онлайн-курсы по IT</title>
    
    <!-- Подключение CSS -->
    <link rel="stylesheet" type="text/css" href="styles/top.css">
    <link rel="stylesheet" type="text/css" href="styles/main1.css">
    <link rel="stylesheet" type="text/css" href="styles/reg .css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <!-- Подключение шапки -->
        <?php require_once "blocks/top.php"; ?>

        <div id="content-container">
            <header id="welcome-header">
                <h1>Добро пожаловать в мир цифровых профессий!</h1>
                <p>Присоединяйтесь к обучающей платформе и изучайте IT-навыки онлайн.</p>
            </header>

            <hr />

            <main id="content">
                <div id="reg-container">
                    <h2>Зарегистрируйтесь и начните обучение!</h2>
                    <form id="registration-form" action="reg.php" method="POST">
                        <input type="text" name="username" class="reg-input" placeholder="Ваше имя" required>
                        <input type="email" name="email" class="reg-input" placeholder="Электронная почта" required>
                        <input type="password" name="password" class="reg-input" placeholder="Пароль" required>
                        <input type="password" name="confirm_password" class="reg-input" placeholder="Повторите пароль" required>
                        <button type="submit" class="reg-btn">Зарегистрироваться</button>
                    </form>
                    <div class="reg-links">
                        <p>Уже есть аккаунт? <a href="index.php">Войти</a></p>
                    </div>
                </div>
            </main>

            <hr />
        </div>

        <!-- Подключение подвала -->
        <?php require_once "blocks/footer.php"; ?>
    </div>
</body>
</html>
