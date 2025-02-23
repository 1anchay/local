<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Наша команда - Сказания Херсонеса</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/mains.css">
  <link rel="stylesheet" type="text/css" href="styles/comand.css">
  <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
</head>
<body>
  <div id="wrapper">
    <?php 
      require_once "www/start.php";
      require_once "blocks/top.php";
    ?>
    <div id="content-container">
      <h1>Наша команда</h1>
      <div class="team-container">
        <div class="team-member" onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
          <div class="image-wrapper">
            <img src="images/hat.png" class="magic-hat" alt="Шапка">
            <img src="images/member1.jfif" alt="Имя Фамилия">
          </div>
          <h3>Иван Живоглядов</h3>
          <div class="member-info">
            <p class="position">Руководитель проекта</p>
            <p>Опыт: 10 лет</p>
            <p>Описание: Характер скверный не женат</p>
          </div>
        </div>
        <div class="team-member" onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
          <div class="image-wrapper">
            <img src="images/hat.png" class="magic-hat" alt="Шапка">
            <img src="images/member2.jpg" alt="Имя Фамилия">
          </div>
          <h3>Евгений Белоконов</h3>
          <div class="member-info">
            <p class="position">Дизайнер</p>
            <p>Опыт: 5 лет</p>
            <p>Описание: Делай, как надо. Как не надо, не делай.</p>
          </div>
        </div>
        <div class="team-member" onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
          <div class="image-wrapper">
            <img src="images/hat.png" class="magic-hat" alt="Шапка">
            <img src="images/member3.jpg" alt="Имя Фамилия">
          </div>
          <h3>Богдан Демченко</h3>
          <div class="member-info">
            <p class="position">Разработчик</p>
            <p>Опыт: 7 лет</p>
            <p>Описание: Завтра рано вставать, встану послезавтра</p>
          </div>
        </div>
        <div class="team-member" onmouseover="showInfo(this)" onmouseout="hideInfo(this)">
          <div class="image-wrapper">
            <img src="images/hat.png" class="magic-hat" alt="Шапка">
            <img src="images/member4.jpg" alt="Имя Фамилия">
          </div>
          <h3>Имя Фамилия</h3>
          <div class="member-info">
            <p class="position">Контент-менеджер</p>
            <p>Опыт: 4 года</p>
            <p>Описание:Я всегда говорю правду, даже когда вру.</p>
          </div>
        </div>
      </div>
      <div class="company-description">
    <h2>Как попасть в команду? 🏛✨</h2>
    <p>Древние пророчества гласят: <em>«Лишь избранные смогут ступить на путь созидателей Херсонеса Таврического»</em>. 
       Если ты не боишься мистических багов, умеешь приручать код и знаешь, чем фронтенд отличается от артефактов древних тавров – добро пожаловать!</p>

    <p>🌀 <strong>Наш путь</strong> — возрождение легенд в цифровом мире.<br>
       📜 <strong>Твои испытания</strong> — пройти лабиринты верстки, победить дракона багов и доказать, что ты достоин стать архитектором нового Херсонеса!</p>

    <h3>Что делать? ⚔️</h3>
    <ul>
        <li>🔍 Найти древний свиток (он же твое резюме).</li>
        <li>📩 Запечатать его цифровой печатью (отправить нам).</li>
        <li>⏳ Ждать знака судьбы (нашего ответа).</li>
    </ul>

    <p>Если таврические боги будут благосклонны, мы возьмем тебя в наш орден! ⚡</p>
</div>

    </div>
    <?php require_once "blocks/footer.php"; ?>
  </div>
  <script>
    function showInfo(member) {
      let info = member.querySelector('.member-info');
      info.style.opacity = "1";
      info.style.transform = "translateY(0)";
    }
    function hideInfo(member) {
      let info = member.querySelector('.member-info');
      info.style.opacity = "0";
      info.style.transform = "translateY(10px)";
    }
  </script>
</body>
</html>