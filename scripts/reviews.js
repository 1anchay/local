document.addEventListener('DOMContentLoaded', function() {
    const showMoreButton = document.querySelector('.show-more');
    const reviewContainer = document.querySelector('.review-container');
  
    // Когда нажимают на кнопку "Показать все отзывы"
    showMoreButton.addEventListener('click', function() {
      reviewContainer.classList.toggle('open'); // Открывает или закрывает контейнер с отзывами
      if (reviewContainer.classList.contains('open')) {
        showMoreButton.textContent = 'Скрыть отзывы'; // Изменяем текст на кнопке
      } else {
        showMoreButton.textContent = 'Показать все отзывы'; // Возвращаем первоначальный текст
      }
    });
  
    // Форма добавления отзыва
    const reviewForm = document.querySelector('.review-form');
    reviewForm.addEventListener('submit', function(event) {
      event.preventDefault();
  
      // Получаем значения отзыва
      const reviewText = reviewForm.querySelector('textarea').value;
      const reviewName = reviewForm.querySelector('input[type="text"]').value;
  
      // Создаем новый отзыв
      const newReview = document.createElement('div');
      newReview.classList.add('review');
      
      const reviewNameElement = document.createElement('div');
      reviewNameElement.classList.add('review-name');
      reviewNameElement.textContent = reviewName;
  
      const reviewTextElement = document.createElement('div');
      reviewTextElement.classList.add('review-text');
      reviewTextElement.textContent = reviewText;
  
      newReview.appendChild(reviewNameElement);
      newReview.appendChild(reviewTextElement);
  
      // Добавляем новый отзыв в контейнер
      reviewContainer.appendChild(newReview);
  
      // Очищаем форму
      reviewForm.querySelector('textarea').value = '';
      reviewForm.querySelector('input[type="text"]').value = '';
    });
  });
  