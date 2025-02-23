<!DOCTYPE html>
<html lang="ru">
<?php
  require_once "www/start.php";
?>
<head>
  <title>Персонализированные маршруты по комплексу</title>
  <meta charset="utf8mb4">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
  <div id="wrapper">
    <?php require_once "blocks/top.php"; ?>

    <div id="content-container">
      <table id="main">
        <tr>
          <td colspan="2" id="header">
            <h1>Персонализированные маршруты по комплексу</h1>
            <p>Разработка системы для создания уникальных экскурсионных маршрутов на основе интересов посетителей.</p>
            <?php require_once "blocks/list_articles.php"; ?>
              <h3>Как подать заявку?</h3>
              <p>Для подачи заявки на участие в разработке персонализированных маршрутов, пожалуйста, отправьте ваше предложение на электронную почту: <strong>hr@bureau.ru</strong> или заполните <a href="apply_form.php">форму заявки</a> на нашем сайте.</p>
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
