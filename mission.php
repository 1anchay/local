<!DOCTYPE html>
<html lang="ru">
<?php
  require_once "www/start.php";
?>
<head>
  <title>Персонализированные маршруты по Херсонесу</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <link rel="stylesheet" type="text/css" href="styles/miss.css">
  
  <!-- Подключаем Leaflet.js -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  <style>
    /* Модальное окно */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .modal-content {
      background: #3b2f2f;
      padding: 30px;
      border-radius: 15px;
      width: 50%;
      text-align: center;
      box-shadow: 0px 0px 20px rgba(255, 215, 0, 0.8);
    }

    .close-btn {
      background: #ffd700;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      font-size: 18px;
      text-transform: uppercase;
      border-radius: 5px;
      margin-top: 20px;
    }

    .close-btn:hover {
      background: #ffdd44;
      box-shadow: 0px 0px 15px gold;
    }

    /* Форма маршрута */
    .route-form input, .route-form select {
      padding: 10px;
      margin: 10px;
      width: 80%;
      border-radius: 5px;
      border: 1px solid #d4af37;
      background-color: #1a1a1a;
      color: #fff;
    }

    .route-form button {
      background-color: #d4af37;
      color: #fff;
      padding: 12px 30px;
      border: none;
      font-size: 18px;
      cursor: pointer;
      text-transform: uppercase;
      border-radius: 5px;
      margin-top: 20px;
    }

    .route-form button:hover {
      background-color: #ffdd44;
      box-shadow: 0px 0px 20px gold;
    }

    /* Вывод маршрута */
    .route-output {
      margin-top: 30px;
      padding: 20px;
      background-color: #3b2f2f;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(255, 215, 0, 0.8);
      color: #ffd700;
      font-size: 20px;
    }

    /* Карта */
    #map {
      width: 100%;
      height: 400px;
      border-radius: 10px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div id="wrapper">
    <?php require_once "blocks/top.php"; ?>

    <div id="content-container">
      <table id="main">
        <tr>
          <td colspan="2" id="header">
            <h1>Персонализированные маршруты по Херсонесу</h1>
            <p>Исследуйте древний комплекс с учетом ваших интересов!</p>
          </td>
        </tr>
        <tr>
          <td colspan="2"><hr /></td>
        </tr>
        <tr>
          <td id="content" style="width: 100%;">
            <h2>Как это работает?</h2>
            <ol>
              <li>Выберите темы, которые вас интересуют (археология, религия, военная история и др.).</li>
              <li>Получите оптимальный маршрут с учетом ваших предпочтений.</li>
              <li>Исследуйте Херсонес в удобном для вас формате!</li>
            </ol>

            <!-- Кнопка для открытия модального окна -->
            <button class="custom-button" onclick="openModal()">Создайте свой маршрут</button>

            <!-- Модальное окно для создания маршрута -->
            <div id="createRouteModal" class="modal">
              <div class="modal-content">
                <h3>Создайте свой персонализированный маршрут</h3>
                <form class="route-form" id="routeForm">
                  <label for="interests">Выберите ваши интересы:</label>
                  <select id="interests" name="interests">
                    <option value="археология">Археология</option>
                    <option value="религия">Религия</option>
                    <option value="военная история">Военная история</option>
                    <option value="культура">Культура</option>
                    <option value="живопись">Живопись</option>
                  </select>

                  <label for="duration">Продолжительность маршрута (в часах):</label>
                  <input type="number" id="duration" name="duration" min="1" max="8" required>

                  <button type="submit">Составить маршрут</button>
                </form>
                <button class="close-btn" onclick="closeModal()">Закрыть</button>
              </div>
            </div>

            <!-- Место для вывода сгенерированного маршрута -->
            <div id="routeOutput" class="route-output"></div>

            <!-- Карта -->
            <div id="map"></div>

          </td>
        </tr>
        <tr>
          <td colspan="2"><hr /></td>
        </tr>
      </table>
    </div>

    <?php require_once "blocks/footer.php"; ?>
  </div>

  <script>
    // Функция для открытия модального окна
    function openModal() {
      document.getElementById('createRouteModal').style.display = 'flex';
    }

    // Функция для закрытия модального окна
    function closeModal() {
      document.getElementById('createRouteModal').style.display = 'none';
    }

    // Обработка отправки формы и генерация маршрута
    document.getElementById('routeForm').addEventListener('submit', function(event) {
      event.preventDefault();

      // Получаем значения из формы
      const interests = document.getElementById('interests').value;
      const duration = document.getElementById('duration').value;

      // Генерируем маршрут
      const route = `
        <h4>Ваш персонализированный маршрут:</h4>
        <p><strong>Интересы:</strong> ${interests}</p>
        <p><strong>Продолжительность:</strong> ${duration} час(ов)</p>
        <p>Выберите тему и наслаждайтесь путешествием по Херсонесу!</p>
      `;

      // Выводим маршрут на страницу
      document.getElementById('routeOutput').innerHTML = route;

      // Закрываем модальное окно
      closeModal();
    });

    // Инициализация карты
    const map = L.map('map').setView([44.5953, 33.5241], 13); // Координаты Херсонеса

    // Добавляем слой карты
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Массив для хранения точек маршрута
    const routePoints = [];

    // Обработчик клика на карту для добавления точки маршрута
    map.on('click', function(e) {
      const lat = e.latlng.lat;
      const lng = e.latlng.lng;

      const description = prompt("Введите описание для этой точки маршрута:");

      if (description) {
        const marker = L.marker([lat, lng]).addTo(map)
          .bindPopup(`<b>Описание:</b><br>${description}`)
          .openPopup();

        // Добавляем точку в массив
        routePoints.push({ lat, lng, description });
      }
    });
  </script>
</body>
</html>
