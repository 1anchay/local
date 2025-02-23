<!DOCTYPE html>
<html lang="ru">
<?php
  require_once "www/start.php";
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Бюро по трудоустройству и профориентации</title>
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <link rel="stylesheet" type="text/css" href="styles/reviews.css">
</head>
<body>
  <div id="wrapper">
    <?php require_once "blocks/top.php"; ?>

    <div id="content-container">
      <table id="main">
        <tr>
          <td colspan="2" id="header">
            <h1>Бюро по трудоустройству и профориентации</h1>
          </td>
        </tr>
        <tr>
          <td colspan="2"><hr /></td>
        </tr>
        <tr>
          <td id="content" style="width: 100%;">
            <!-- Векторные изображения по бокам -->
            <img src="/images/left.jpg" alt="Украшение слева" class="decor-image left">
            <img src="/images/left.jpg" alt="Украшение справа" class="decor-image right">

            <!-- Контейнер с двумя колонками: форма слева, отзывы справа -->
            <div class="review-section">
              <!-- Левая колонка: Форма добавления отзыва -->
              <div class="review-form-column">
                <div class="review-form">
                  <h2>Оставить отзыв</h2>
                  <form name="guestbook" method="POST" action="">
                    <label for="name">Ваше имя:</label>
                    <input type="text" id="name" name="name" required><br><br>
  
                    <label for="comment">Ваш комментарий:</label><br>
                    <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br><br>
  
                    <input type="submit" name="button_guestbook" value="Добавить запись">
                  </form>
                </div>
              </div>
  
              <!-- Правая колонка: Список отзывов -->
              <div class="reviews-column">
                <div class="review-container">
                  <h2>Отзывы</h2>
                  <!-- Вывод первых 5 отзывов -->
                  <div class="reviews-list">
                    <?php
                      $reviews = getAllGuestBookComments();
                      $reviewsToShow = array_slice($reviews, 0, 5);
                      foreach ($reviewsToShow as $review) {
                        echo "<div class='review'>";
                        echo "<p class='review-name'>" . htmlspecialchars($review["name"]) . "</p>";
                        echo "<p class='review-text'>" . nl2br(htmlspecialchars($review["comment"])) . "</p>";
                        echo "</div>";
                      }
                    ?>
                  </div>
  
                  <!-- Скрытые отзывы -->
                  <div class="hidden-reviews">
                    <?php
                      $hiddenReviews = array_slice($reviews, 5);
                      foreach ($hiddenReviews as $review) {
                        echo "<div class='review hidden'>";
                        echo "<p class='review-name'>" . htmlspecialchars($review["name"]) . "</p>";
                        echo "<p class='review-text'>" . nl2br(htmlspecialchars($review["comment"])) . "</p>";
                        echo "</div>";
                      }
                    ?>
                  </div>
  
                  <a class="show-more" onclick="toggleReviews()">Показать все отзывы</a>
                </div>
              </div>
            </div>
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
    // Функция для показа/скрытия скрытых отзывов с анимацией
    function toggleReviews() {
      var hiddenReviews = document.querySelectorAll('.hidden-reviews .review');
      var showMoreText = document.querySelector('.show-more');

      hiddenReviews.forEach(review => {
        review.classList.toggle('visible');
      });

      if (hiddenReviews[0].classList.contains("visible")) {
        showMoreText.innerHTML = "Скрыть отзывы";
      } else {
        showMoreText.innerHTML = "Показать все отзывы";
      }
    }
  </script>
</body>
</html>
