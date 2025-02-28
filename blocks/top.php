<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdTech Платформа</title>
    <link rel="stylesheet" href="top1.css">
    <script src="sun.js" defer></script>
</head>
<body>

  <!-- Хедер -->
  <header id="header">
    <div class="header-container">
      <!-- Логотип -->
      <div class="logo">
        <img src="images/logotyp.jpg" alt="Логотип EdTech" class="header-logo">
      </div>

      <!-- Навигация -->
      <nav>
        <ul>
          <li><a href="index1.php">Главная</a></li>
          <li><a href="article.php">Курсы</a></li>
          <li><a href="guestbook.php">Сообщество</a></li>
          <li><a href="reg.php">Регистрация</a></li>
        </ul>
      </nav>

      <!-- Блок авторизации -->
      <div class="auth-theme-container">
        <?php
        session_start(); 

        if (isset($_SESSION["email"]) && isset($_SESSION["password"]) && checkUser($_SESSION["email"], $_SESSION["password"])) {
            require_once "blocks/user_panel.php";  
        } else {
        ?>
            <form action="auth.php" name="auth" method="post" class="auth-form">
                <input type="text" name="email" placeholder="E-mail" required />
                <input type="password" name="password" placeholder="Пароль" required />
                <button type="submit" name="button_auth" class="btn-auth">Войти</button>
            </form>
        <?php
        }
        ?>

        <!-- Кнопка переключения темы (без иконки солнца) -->
        <button id="theme-toggle" class="theme-btn"></button>
      </div>
    </div>

    <!-- Декоративные линии -->
    <div class="header-line"></div>
    <div class="header-glow"></div>
  </header>

</body>
</html>
