<!DOCTYPE html>
<html lang="ru">
<?php
require_once "www/start.php";
$article = getArticle($_GET["id"]);
$id = $article["id"];
$title = $article["title"];
$full_text = $article["full_text"];
?>
<head>
  <title>Вакансии - Бюро по трудоустройству и профориентации</title>
  <meta charset="utf8mb4">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/main1.css">
</head>
<body>
  <div id="wrapper">
    <?php require_once "blocks/top.php"; ?>

    <div id="content-container">
      <table id="main">
        <tr>
          <td colspan="2" id="header">
            <h1>Вакансии</h1>
            <p>Найдите работу своей мечты!</p>
            <?php require_once "blocks/full.php"; ?>
            <h3>Как подать заявку?</h3>
            <p>Для подачи заявки, пожалуйста, отправьте ваше резюме на электронную почту: <strong>hr@bureau.ru</strong> или заполните <a href="apply_form.php">форму заявки</a> на нашем сайте.</p>
          </td>
          <td id="sidebar">
            <?php require_once "blocks/banners_240.php"; ?>
          </td>
        </tr>
        <tr><td colspan="2"><hr /></td></tr>
      </table>
    </div>

    <?php require_once "blocks/footer.php"; ?>
  </div>
</body>
</html>
