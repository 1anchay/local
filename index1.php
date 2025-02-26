<!DOCTYPE html>
<html lang="ru">
<?php
	require_once "www/start.php";
?>
<head>
  <title>Онлайн-курсы и IT-обучение</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/top1.css">
  <link rel="stylesheet" type="text/css" href="styles/main12.css">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <link rel="stylesheet" type="text/css" href="styles/footer.css">
  <script src="script.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

  <!-- Кнопка переключения темы (убран значок солнца) -->
  <button id="theme-toggle" class="theme-btn"></button>

  <div id="wrapper">
    <?php require_once "blocks/top.php"; ?>

    <div class="container">
      <!-- Фильтры -->
      <div class="filters">
        <h3>Фильтры</h3>

        <!-- Категория -->
        <div class="filter-section">
          <span class="filter-label">Категория</span>
          <div class="filter-options">
            <div class="filter-option">Разработка</div>
            <div class="filter-option">Аналитика</div>
            <div class="filter-option">Кибербезопасность</div>
            <div class="filter-option">Маркетинг</div>
          </div>
        </div>

        <!-- Уровень сложности -->
        <div class="filter-section">
          <span class="filter-label">Уровень сложности</span>
          <div class="filter-options">
            <div class="filter-option">Новичок</div>
            <div class="filter-option">Средний</div>
            <div class="filter-option">Продвинутый</div>
          </div>
        </div>

        <!-- Фильтр "С трудоустройством" -->
        <div class="filter-section">
          <label class="filter-label">С трудоустройством</label>
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
        </div>
      </div>

      <!-- Карточки курсов -->
      <div class="course-grid">
        <div class="course-card popular">
          <span class="tag">Популярное</span>
          <img src="images/python.jpg" alt="Python-разработчик">
          <h2>Python-разработчик</h2>
          <p>10 месяцев</p>
        </div>

        <div class="course-card">
          <img src="images/data_science.jpg" alt="Data Scientist">
          <h2>Data Scientist</h2>
          <p>12 месяцев</p>
        </div>

        <div class="course-card">
          <img src="images/frontend.jpg" alt="Фронтенд-разработчик">
          <h2>Фронтенд-разработчик</h2>
          <p>9 месяцев</p>
        </div>

        <div class="course-card popular">
          <span class="tag">Популярное</span>
          <img src="images/testing.jpg" alt="Тестировщик">
          <h2>Инженер по тестированию</h2>
          <p>10 месяцев</p>
        </div>

        <div class="course-card">
          <img src="images/java.jpg" alt="Java-разработчик">
          <h2>Java-разработчик</h2>
          <p>8 месяцев</p>
        </div>

        <div class="course-card">
          <img src="images/cpp.jpg" alt="Разработчик C++">
          <h2>Разработчик C++</h2>
          <p>8 месяцев</p>
        </div>

        <div class="course-card">
          <img src="images/security.jpg" alt="Кибербезопасность">
          <h2>Специалист по кибербезопасности</h2>
          <p>12 месяцев</p>
        </div>

        <div class="course-card">
          <img src="images/analytics.jpg" alt="Аналитик данных">
          <h2>Аналитик 1С</h2>
          <p>8 месяцев</p>
        </div>
      </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
  </div>

</body>
</html>
