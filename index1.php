<!DOCTYPE html>
<html lang="ru">
<?php
	require_once "www/start.php";
?>
<head>
  <title>Сказания Херсонеса</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  <script type="text/javascript">
    function init() {
      var myMap = new ymaps.Map("map", {
        center: [44.5951, 33.5255], // Координаты Херсонеса
        zoom: 15
      });

      var myPlacemark = new ymaps.Placemark([44.5951, 33.5255], {
        balloonContent: 'Херсонес'
      });

      myMap.geoObjects.add(myPlacemark);
    }
    ymaps.ready(init);
  </script>
</head>
<body>
  <div id="wrapper">
    <?php require_once "blocks/top.php"; ?>
    <div id="content-container">
      <table id="main">
        <tr>
          <td colspan="2" id="header">
            <h1>Сказания Херсонеса</h1>
            <div id="map" style="width: 100%; height: 400px;"></div> <!-- Контейнер для карты -->
          </td>
        </tr>
        <tr>
          <td colspan="2"><hr /></td>
        </tr>
        <tr>
          <td id="content" style="width: 100%;">  <!-- Контент теперь занимает 100% ширины -->
            <?php require_once "blocks/main_article.php"; ?>
          </td>
        </tr>
        <tr>
          <td colspan="2"><hr /></td>
        </tr>
      </table>
    </div>
    <?php require_once "blocks/footer.php"; ?>
  </div>
</body>
</html>
