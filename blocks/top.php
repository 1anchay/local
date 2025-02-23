<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваш сайт</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- Хедер -->
  <header id="header">
    <div class="logo">
      <img src="images/logo3.png" alt="Логотип Бюро" class="header-logo">
    </div>
    <nav>
      <ul>
        <li><a href="index1.php">Главная</a></li>
        <li><a href="article.php">Маршруты</a></li>
        <li><a href="guestbook.php">Отзывы</a></li>
        <li><a href="reg.php">Регистрация</a></li>
      </ul>
    </nav>
    <div class="auth-container">
      <?php
      session_start();  // Убедитесь, что сессия начата

      // Проверяем, если пользователь уже авторизован
      if (isset($_SESSION["email"]) && isset($_SESSION["password"]) && checkUser($_SESSION["email"], $_SESSION["password"])) {
          // Если пользователь авторизован, показываем панель пользователя
          require_once "blocks/user_panel.php";  // Показ панель пользователя
      } else {
          // Если не авторизован, показываем форму авторизации
          ?>
          <form action="auth.php" name="auth" method="post">
            <input type="text" name="email" placeholder="E-mail" required />
            <input type="password" name="password" placeholder="Пароль" required />
            <input type="submit" name="button_auth" value="Войти" />
          </form>
          <?php
      }
      ?>
    </div>
  </header>