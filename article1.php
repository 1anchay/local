<!DOCTYPE html>
<html lang="ru">
<?php
  require_once "www/start.php";
?>
<head>
  <title>Разработка онлайн-курсов и образовательных платформ</title>
  <meta charset="utf8mb4">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/top.css">
  <link rel="stylesheet" type="text/css" href="styles/main1.css">
  <link rel="stylesheet" type="text/css" href="styles/kersy.css">
</head>
<body>
  <div id="wrapper">
    <?php require_once "blocks/top.php"; ?>

    <div id="content-container">
      <table id="main">
        <tr>
          <td colspan="2" id="header">
            <h1>Разработка онлайн-курсов и образовательных платформ</h1>
            <p>Создание инновационных решений для обучения цифровым профессиям и популяризации IT-отрасли среди студентов.</p>
            <div class="articles-container">
              <?php
              $articles = getAllArticles();
              for ($i=0; $i<count($articles); $i++) {
                $id=$articles[$i]["id"];
                $title=$articles[$i]["title"];
                $intro_text=$articles[$i]["intro_text"];
                include "blocks/intro_article.php";
              }
              ?>
            </div>
            <h3>Как принять участие?</h3>
            <p>Если вы хотите внести вклад в разработку образовательных онлайн-курсов, отправьте ваше предложение на электронную почту: <strong>edu@bureau.ru</strong> или заполните <a href="apply_form.php">форму заявки</a> на нашем сайте.</p>
          </td>
        </tr>
        <tr><td colspan="2"><hr /></td></tr>
      </table>
    </div>

    <!-- Подключаем footer -->
    <?php require_once "blocks/footer.php"; ?>
  </div>
</body>
</html>
