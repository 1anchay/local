<!DOCTYPE html>
<html lang="ru">
<?php require_once "www/start.php"; ?> <!-- Подключаем start.php -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Наследие Херсонеса ⚔️🏺</title>
    
    <!-- Подключение CSS -->
    <link rel="stylesheet" type="text/css" href="styles/mains.css">
    <link rel="stylesheet" type="text/css" href="styles/regi.css">
    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">

    <style>
        /* Стиль для свитка */
        #scroll-content {
            max-height: 0; /* Изначально свиток закрыт */
            overflow: hidden;
            transition: max-height 2s ease-out, opacity 1s ease-in-out; /* Анимация раскрытия и скрытия */
            background-color: #FF8C00;
            color: #fff;
            padding: 10px;
            margin-top: 10px;
            opacity: 0; /* Начальная невидимость */
        }

        .scroll-open {
            max-height: 300px; /* Размер свитка при открытии */
            opacity: 1; /* Свиток становится видимым */
        }

        .scroll-content-inner {
            padding: 10px;
        }

        /* Стиль для свитка, который закрывается */
        .scroll-close {
            max-height: 0; /* Скрываем свиток */
            opacity: 0; /* Прячем */
        }
    </style>

    <script>
        // Функция для анимации свитка (открытие)
        function scrollUp() {
            var scrollElement = document.getElementById('scroll-content');
            scrollElement.classList.add('scroll-open'); // Открываем свиток
            scrollElement.classList.remove('scroll-close'); // Убираем класс закрытия
        }

        // Функция для анимации свитка (закрытие)
        function scrollClose() {
            var scrollElement = document.getElementById('scroll-content');
            scrollElement.classList.add('scroll-close'); // Закрываем свиток
            scrollElement.classList.remove('scroll-open'); // Убираем класс открытия
        }

        // Отправка формы с задержкой после анимации
        function submitForm(event) {
            event.preventDefault(); // Предотвращаем немедленную отправку формы
            scrollUp(); // Запускаем анимацию открытия свитка

            // После завершения анимации (через 3 секунды) скрываем свиток и отправляем форму
            setTimeout(function() {
                scrollClose(); // Закрываем свиток
                // Отправляем форму
                document.getElementById("registration-form").submit();
            }, 3000); // Задержка 3 секунды для анимации открытия свитка
        }
    </script>
</head>
<body>

    <div id="wrapper">
        <!-- Подключение шапки -->
        <?php require_once "blocks/top.php"; ?>

        <div id="content-container">
            <header id="welcome-header">
                <h1>Добро пожаловать в Наследие Херсонеса ⚔️🏺</h1>
                <p>Мы рады приветствовать тебя! Регистрация поможет стать частью великой истории.</p>
            </header>

            <hr />

            <main id="content">
                <div id="reg-container">
                    <h2>Вступи в ряды хранителей истории! 📜✨</h2>
                    <!-- Добавил id для формы -->
                    <form id="registration-form" action="reg.php" method="POST" onsubmit="submitForm(event)">
                        <input type="text" name="username" class="reg-input" placeholder="Имя героя 🏛️" required>
                        <input type="email" name="email" class="reg-input" placeholder="Пергамент для связи 📜" required>
                        <input type="password" name="password" class="reg-input" placeholder="Тайный ключ 🔑" required>
                        <input type="password" name="confirm_password" class="reg-input" placeholder="Повтори ключ 🔄" required>
                        <button type="submit" class="reg-btn">Войти в Легенду! ⚡</button> <!-- Теперь форма отправляется через JS -->
                    </form>
                    <div class="reg-links">
                        <p>Уже среди нас? <a href="index1.php">Войти в хроники 📖</a></p>
                    </div>
                    
                    <!-- Свиток, который будет раскрывать информацию -->
                    <div id="scroll-content">
                        <div class="scroll-content-inner">
                            <h3>Поздравляем! Ты успешно зарегистрирован.</h3>
                            <p>Теперь ты можешь войти и начать путешествие в великое наследие!</p>
                        </div>
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
